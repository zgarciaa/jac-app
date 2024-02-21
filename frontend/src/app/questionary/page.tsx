import styles from './page.module.css';
import {getQuestions} from "@/app/questionary/utils/questions";

export default async function Questionary() {
    const questions = await getQuestions();
    return (
        <>
            <h1 className={styles.title}>Cuestionario</h1>
            <div>
                {questions.map(question => (
                    <div key={question.id} className={styles.question}>
                        <p>{question.id}. {question.statement}</p>
                        {/*<p>Grupo: {question.group}</p>*/}
                        <div className={styles.answerOptions}>
                            {question.answer_options.map(option => (
                                <div key={option.id} className={styles.option}>
                                    <label>
                                        <input
                                            type={question.multiple_answers === 0 ? 'radio' : 'checkbox'}
                                            name={`question_${question.id}`}
                                            value={option.value}/>
                                        {option.value}
                                    </label>
                                </div>
                            ))}
                        </div>
                    </div>
                ))}
            </div>
        </>
    );
}
