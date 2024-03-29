<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = ['description', 'topic_id', 'question_type'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public static function getByTopicAndQuestionNumber(Topic $topic, $questionNumber)
    {
        return Question::where('topic_id', '=', $topic->id)->orderBy('created_at', 'DESC')->get()[$questionNumber - 1];
    }

    public function nextQuestionLink($baseTopicName, Topic $topic, $questionNumber) {

        $nextQuestionLink = [];

        if (count($topic->questions) != $questionNumber) {
            $nextQuestionLink['url']   = '/train/'. $baseTopicName . '/' . $topic->name . '/' . ++$questionNumber;
            $nextQuestionLink['text']  = 'Следующий вопрос';
            $nextQuestionLink['class'] = 'btn-default';
        } else {
            $nextQuestionLink['url']   = '/';
            $nextQuestionLink['text']  = 'Завершить';
            $nextQuestionLink['class'] = 'btn-primary';
        }

        return $nextQuestionLink;
    }

    /**
     * Returns an array of all possible question types.
     *
     * @return array
     */
    public static function possibleTypes()
    {
        $type = \DB::select(\DB::raw('SHOW COLUMNS FROM questions WHERE Field = "question_type"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $values = [];
        foreach(explode(',', $matches[1]) as $value){
            $values[] = trim($value, "'");
        }
        return $values;
    }

    public function renderDescription() {

        $type = $this->question_type;
        $description = $this->description;

        switch($type) {
            case "one_variant":
                return $description;
                break;
            case "two_variants":
                return $description . ' <b><i>(Выберите два варианта ответа)</i></b>';
                break;
            case "all_that_apply":
                return $description . ' <b><i>(Выберите все подходящие варианты)</i></b>';
                break;
        }
    }

}

