import React, {Component} from 'react';
import './App.css';

import Student from './Student/Student';

class App extends Component {
    state = {
        vak: 'AWD',
        students: [
            {naam: 'Maarten', geslaagd: 'Nee'},
            {naam: 'Jurgen', geslaagd: 'Ja'},
            {naam: 'Peter', geslaagd: 'Ja'}
        ]
    };

    corrigeerScoreHandler = (nieuweScore) => {
        this.setState({
            students: [
                {naam: 'Ann', geslaagd: nieuweScore},
                {naam: 'Els', geslaagd: 'Ja'},
                {naam: 'Peter', geslaagd: 'Nee'}
            ]
        });
    };

    veranderNaamHandler = (event) => {
        this.setState({
            students: [
                {naam: 'Ann', geslaagd: 'Ja'},
                {naam: event.target.value, geslaagd: 'Ja'},
                {naam: 'Peter', geslaagd: 'Nee'}
            ]
        });
    };

    render() {
        const style = {
            backgroundColor: 'mistyrose',
            font: 'inherit',
            border: '1px solid blue',
            padding: '10px',
            cursor: 'pointer'
        };
        return (
            <div className="App">
                <h1>Dit is de App Titel</h1>
                <p>En een App paragraaf</p>
                <button
                    style={style}
                    onClick={this.corrigeerScoreHandler.bind(this,'Ja')}>Corrigeer score</button>
                <Student
                    naam={this.state.students[0].naam}
                    geslaagd={this.state.students[0].geslaagd}
                    wijzig={this.veranderNaamHandler}
                    click={() => this.corrigeerScoreHandler('Nee')}
                />
                <Student
                    naam={this.state.students[1].naam}
                    geslaagd={this.state.students[1].geslaagd}
                    wijzig={this.veranderNaamHandler}
                />
                <Student
                    naam={this.state.students[2].naam}
                    geslaagd={this.state.students[2].geslaagd}
                    wijzig={this.veranderNaamHandler}
                />

            </div>
        );
    }
}

export default App;
