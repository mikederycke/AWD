import React, {Component} from 'react';
import Student from "./Student/Student";

class Students extends Component {

    render() {

        return this.props.students.map((student, index) => {
            return <Student
                naam={student.naam}
                geslaagd={student.geslaagd}
                key={student.id}
                click={() => this.props.clicked(index)}
                wijzig={(event) => this.props.changed(event, student.id)}
            />
        });
    }

}

export default Students;