import React, { Component } from 'react';

class App extends Component {
  constructor(props) {
    super(props)
    this.state = { value: 10 }
  }

  setNewValue(newValue) {
    this.setState({ value: newValue})
  }

  componentDidMount() {
    this.setNewValue(1)
  }

  render() {
    return (
      <div className="App">
        <h1>
        { this.state.value }
        </h1>
      </div>
    );
  }
}

export default App;
