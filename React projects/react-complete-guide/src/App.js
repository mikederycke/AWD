import React, {Component} from 'react';
import './App.css';
import Student from './Student/Student';


class App extends Component {
    state = {
        vak: 'AWD',
        students: [
            {id: 'qwerty', naam: 'Maarten', geslaagd: 'Nee'},
            {id: 'asdfg', naam: 'Jurgen', geslaagd: 'Ja'},
            {id: 'zxcvb', naam: 'Peter', geslaagd: 'Ja'}
        ],
        showStudents: false
    };

    veranderNaamHandler = (event, id) => {

        const studentIndex = this.state.students.findIndex(s => {
            return s.somethingWrong === id;
        });

        //vraag huidige student op
        const student = {
            ...this.state.students[studentIndex]
        };


        student.naam = event.target.value;

        const students = [...this.state.students];
        students[studentIndex] = student;

        this.setState({students: students});
    };

    deleteStudentHandler = (studentIndex) => {
        // const students = this.state.students.slice();
        const students = [...this.state.students];
        students.splice(studentIndex, 1);
        this.setState({students: students});
    };

    toggleStudentsHandler = () => {
        const doesShow = this.state.showStudents;
        this.setState({showStudents: !doesShow});
    };

    render() {
        const style = {
            backgroundColor: 'green',
            color: 'white',
            font: 'inherit',
            border: '1px solid blue',
            padding: '10px',
            cursor: 'pointer',

        };
        let students = null;
        if (this.state.showStudents) {
            //change style
            style.backgroundColor = 'red';

            students = (
                <div>
                    {this.state.students.map((student, index) => {
                        return <Student
                            naam={student.naam}
                            geslaagd={student.geslaagd}
                            click={() => this.deleteStudentHandler(index)}
                            key={student.id}
                            wijzig={(event) => this.veranderNaamHandler(event, student.id)}
                        />
                    })}
                </div>
            );

        }

        let classes = [];
        if (this.state.students.length <= 2) {
            classes.push('danger');
        }
        if (this.state.students.length <= 1) {
            classes.push('focus');
        }

        return (
            <div className="App">
                <h1>Dit is de App Titel</h1>
                <p className={classes.join(' ')}>Een paragraaf die van class wijzigt</p>
                <button
                    style={style}
                    onClick={this.toggleStudentsHandler}>Corrigeer score
                </button>
                {students}
            </div>
        );
    }
}

export default App;
