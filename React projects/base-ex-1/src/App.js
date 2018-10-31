import React, {Component} from 'react';

import './App.css';
import UserInput from './UserInput/UserInput';
import UserOutput from './UserOutput/UserOutput';


class App extends Component {
    state = {
        username: 'Mike'
    };

    usernameChangeHandler = (event) => {
        this.setState({
            username: event.target.value
        });
    };

    render() {
        return (
            <div className="App">
                <p>This works</p>
                <UserInput changed={this.usernameChangeHandler} currentName={this.state.username}/>
                <UserOutput userName={this.state.username} />
                <UserOutput userName={this.state.username}/>
                <UserOutput userName="Lia"/>
            </div>
        );
    }


}

export default App;
