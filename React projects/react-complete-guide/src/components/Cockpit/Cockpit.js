import React from 'react';
import './Cockpit.css';

const cockpit = (props) => {
    const style = {
        backgroundColor: 'green',
        color: 'white',
        font: 'inherit',
        border: '1px solid blue',
        padding: '10px',
        cursor: 'pointer',
    };
    if(props.showStudents){
        //change style
        style.backgroundColor = 'red';
    }else{
        style.backgroundColor = 'green';
    }

    let classes = [];
    if (props.students.length <= 2) {
        classes.push('danger');
    }
    if (props.students.length <= 1) {
        classes.push('focus');
    }

    return (
        <div>
            <h1>Dit is de App Titel</h1>
            <p className={classes.join(' ')}>Een paragraaf die van class wijzigt</p>
            <button
                style={style}
                onClick={props.click}>Corrigeer score
            </button>
        </div>
    );
};


export default cockpit;