import React, { Component } from 'react';

import './Student.css';

class Student extends Component {


    render() {

        return (
            <div className="Student">
                <p onClick={this.props.click}>Welkom {this.props.naam}. Geslaagd voor AWD: {this.props.geslaagd}</p>
                <p>{this.props.children}</p>
                <input type="text" onChange={this.props.wijzig} value={this.props.naam}/>
            </div>
        )
    }
}
export default Student;