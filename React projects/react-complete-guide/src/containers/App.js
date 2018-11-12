import React, {Component} from 'react';
import './App.css';
import Students from '../components/Students/Students';
import Cockpit from '../components/Cockpit/Cockpit';

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
            return s.id === id;
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


        let students = null;
        if (this.state.showStudents) {
            students = <Students
                        students={this.state.students}
                        clicked={this.deleteStudentHandler}
                        changed={this.veranderNaamHandler}/>;

        }

        return (
            <div className="App">
                <Cockpit
                    title={this.props.title}
                    showStudents={this.state.showStudents}
                        students={this.state.students}
                        click={this.toggleStudentsHandler}/>
                {students}
            </div>
        );
    }
}

export default App;
