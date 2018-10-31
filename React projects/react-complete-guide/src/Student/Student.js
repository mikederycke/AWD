import React from 'react';
import './Student.css';
const student = (props) => {
    return (
        <div className="Student">
            <p onClick={props.click}>Welkom {props.naam}. Geslaagd voor AWD: {props.geslaagd}</p>
            <p>{props.children}</p>
            <input type="text" onChange={props.wijzig} value={props.naam}/>
        </div>
    )
};
export default student;