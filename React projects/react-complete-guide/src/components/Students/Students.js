import React from 'react';
import Student from "./Student/Student";

const persons = (props) => props.students.map((student, index) => {
        return <Student
            naam={student.naam}
            geslaagd={student.geslaagd}
            key={student.id}
            click={() => props.clicked(index)}
            wijzig={(event) => props.changed(event, student.id)}
        />
    }
);

export default persons;