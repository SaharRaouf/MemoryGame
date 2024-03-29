<?php namespace App\Http\Controllers;


use App\BaseTopic;

use App\Topic;
use App\Question;
use App\Answer;
use App\Reply;
use App\Http\Requests;


use Request;

class QuizController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'train']);
    }

    public function index()
    {
       $baseTopics = BaseTopic::where('is_published', '=', true)->get();
      //  $baseTopics = Topic::all();

        return view('quiz.index', compact('baseTopics'));

    }

    public function train($baseTopicName) {

        $baseTopic = BaseTopic::where('name', '=', $baseTopicName)->first();

        $topics = $baseTopic->topics()->orderBy('name')->get();

        return view('quiz.train', compact('baseTopic', 'topics'));
    }

    public function show($baseTopicName, $topicName, $questionNumber) {

        $baseTopic = BaseTopic::where('name', '=', $baseTopicName)->first();

        $topic = Topic::where('name', '=', $topicName)->first();

        // may needs to be refactored, may check sql queries
        $question = Question::getByTopicAndQuestionNumber($topic, $questionNumber);

        $answers = $question->answers()->get();

        $nextQuestionLink = $question->nextQuestionLink($baseTopicName, $topic, $questionNumber);

        return view('quiz.show')->with([
            'questionNumber' => $questionNumber,
            'topic'          => $topic,
            'question'       => $question,
            'answers'        => $answers,
            'next'           => $nextQuestionLink,
            'baseTopic'      => $baseTopic
        ]);
    }

    public function proposeSolution() {

        $questionId = Request::get('questionId');
        $question = Question::find($questionId);
        $answers = $question->answers()->get()->toArray();

        // Prepare array of proposed answers
        $proposedSolution = [];
        if ($question->question_type == 'one_variant')
        {
            $proposedSolution[] = (int)Request::get('chosenAnswer');
        }
        else
        {
            $proposedSolution = Request::get('chosenAnswers');
        }

        // Prepare array of correct answers
        $correctSolution = [];
        foreach($answers as $answer) {
            if ($answer['is_correct']) {
                $correctSolution[] = $answer['id'];
            }
        }

        $proposedSolutionResult = ($proposedSolution == $correctSolution);

        // pass to response detailed results on proposed solution
        $proposedSolutionWithDetailedResult = [];
        foreach ($proposedSolution as $answerId) {
            foreach ($answers as $answer) {
                if ($answer['id'] == $answerId) {
                    $is_correct = $answer['is_correct'];
                }
            }
            $proposedSolutionWithDetailedResult[$answerId] = $is_correct;
        }

        \Auth::user()->replies()->updateOrCreate(['question_id' => $questionId], ['is_correct' => $proposedSolutionResult]);

          response()->json([
            'correctSolution' => $correctSolution,
            'proposedSolutionWithDetailedResult' => $proposedSolutionWithDetailedResult,
            'proposedSolutionResult'=> $proposedSolutionResult
        ]);

        return redirect(Request::get('url'));


    }
}
