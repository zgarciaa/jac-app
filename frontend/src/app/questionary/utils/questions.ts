import {Question} from "@/app/questionary/interfaces";

export async function getQuestions(): Promise<Question[]> {
    const res = await fetch('http://127.0.0.1:8000/api/questions');
    if (!res.ok) {
        throw new Error('Failed to fetch data');
    }
    return res.json();
}
