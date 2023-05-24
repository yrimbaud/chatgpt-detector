<?php
class TextAnalysis {
    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function averageSentenceLength() {
        $sentences = explode(".", $this->text);
        $sentenceCount = count($sentences);
        $wordCount = str_word_count($this->text);
        return $wordCount / $sentenceCount;
    }

    public function lexicalDiversity() {
        $words = str_word_count($this->text, 1);
        $wordCount = count($words);
        $uniqueWords = count(array_unique($words));
        return $uniqueWords / $wordCount;
    }

    public function complexityScore() {
        return $this->averageSentenceLength() * $this->lexicalDiversity();
    }

    public function checkParagraphStructure() {
        $pattern = "/([a-z0-9\s]+): [A-Z]/";
        return preg_match($pattern, $this->text);
    }
}

function is_written_by_chatgpt($text) {
    $chatgpt_patterns = [
        "Regenerate response"
    ];

    foreach ($chatgpt_patterns as $pattern) {
        if (preg_match($pattern, $text)) {
            return true;
        }
    }

    // Analyse the text
    $textAnalysis = new TextAnalysis($text);
    $score = $textAnalysis->complexityScore();

    if ($score > $some_threshold) {
        return true;
    }

    // Check the paragraph structure
    if ($textAnalysis->checkParagraphStructure()) {
        return true;
    }

    return false;
}

$text = file_get_contents('./input.txt', true);

if (is_written_by_chatgpt($text)) {
    echo "Ce texte semble avoir été écrit par ChatGPT.";
} else {
    echo "Ce texte ne semble pas avoir été écrit par ChatGPT.";
}
?>
