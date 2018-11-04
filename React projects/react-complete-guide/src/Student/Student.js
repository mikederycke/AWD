import React from 'react';

import './Student.css';

const student = (props) => {
    const rnd = Math.random();
    if(rnd > 0.7){
        throw new Error ('Wat een custom error!');
    }

    return (
        <div className="Student">
            <p onClick={props.click}>Welkom {props.naam}. Geslaagd voor AWD: {props.geslaagd}</p>
            <p>{props.children}</p>
            <input type="text" onChange={props.wijzig} value={props.naam}/>
        </div>
    )
};
export default student;