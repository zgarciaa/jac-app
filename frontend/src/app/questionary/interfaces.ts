
export interface Question {
    id: number;
    statement: string;
    group: string;
    sub_group: string | null;
    multiple_answers: 0 | 1;
    answer_options: AnswerOption[];
}

interface AnswerOption {
    id: number;
    question_id: number;
    value: string;
    letter: string;
    is_other: 0 | 1;
}
