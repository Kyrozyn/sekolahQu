import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Alert from "@material-ui/lab/Alert";
import MaterialTable from "material-table";

export default class DaftarDaerah extends Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
        }
    }

    componentDidMount() {

    }

    render() {

    }
}

if (document.getElementById('daftarmanual')) {
    var data = document.getElementById('daftarmanual').getAttribute('data');
    ReactDOM.render(<DaftarDaerah data={data}/>, document.getElementById('daftarmanual'));
}
