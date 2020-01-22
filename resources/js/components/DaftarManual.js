import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
export default class DaftarManual extends Component {

    constructor(props) {
        super(props);
        this.state = {
            NPSN: '',
            namasekolah: '',
            alamat: '',
            status: 'n',
            email: '',
            password: '',
        }
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleNPSN = this.handleNPSN.bind(this);
        this.handleNamaSekolah = this.handleNamaSekolah.bind(this);
        this.handleAlamat = this.handleAlamat.bind(this);
        this.handleStatus= this.handleStatus.bind(this);
        this.handleEmail= this.handleEmail.bind(this);
        this.handlePassword= this.handlePassword.bind(this);
    }

    // componentDidMount() {
    //
    // }

    handleNPSN(event) {
        this.setState({NPSN: event.target.value});
    }
    handleNamaSekolah(event) {
        this.setState({namasekolah: event.target.value});
    }
    handleAlamat(event) {
        this.setState({alamat: event.target.value});
    }
    handleStatus(event) {
        this.setState({status: event.target.value});
    }
    handleEmail(event) {
        this.setState({email: event.target.value.toLowerCase()});
    }
    handlePassword(event) {
        this.setState({password: event.target.value});
    }

    handleSubmit(event,data){
        console.log(event)
        console.log(data)
        console.log(this.state)
        axios.post('/sekolah', {
            NPSN: this.state.NPSN,
            namasekolah: this.state.namasekolah,
            alamat: this.state.alamat,
            status: this.state.status,
        }).catch((error) => {
            // Error 😨
            if (error.response) {
                /*
                 * The request was made and the server responded with a
                 * status code that falls out of the range of 2xx
                 */
                console.log(error.response.data);
                console.log(error.response.status);
                console.log(error.response.headers);
                if(error.response.data === 'npsnduplicate'){
                    alert('Sekolah/NPSN sudah terdaftar.')
                }
            }
        });
        axios.post('/user/store', {
            email: this.state.email,
            password: this.state.password,
            NPSN: this.state.NPSN
        }).then(()=> alert('Anda berhasil daftar.')).catch((error) => {
                // Error 😨
                if (error.response) {
                    /*
                     * The request was made and the server responded with a
                     * status code that falls out of the range of 2xx
                     */
                    console.log(error.response.data);
                    console.log(error.response.status);
                    console.log(error.response.headers);
                    if(error.response.data === 'emailduplicate'){
                        alert('Email sudah terdaftar.')
                    }
                }
            });
        event.preventDefault();
    }

    render() {
        return(
            <form onSubmit={this.handleSubmit}>
                <div className="form-group">
                    <label htmlFor="NPSN">NPSN</label>
                    <input type="text" className="form-control" id="NPSN"
                           placeholder="NPSN" required={true} maxLength="8" minLength="7" pattern="[0-9]+" value={this.state.NPSN} onChange={this.handleNPSN} />
                </div>
                <div className="form-group">
                    <label htmlFor="namasekolah">Nama Sekolah</label>
                    <input type="text" className="form-control" id="namasekolah" placeholder="Nama Sekolah" required={true} value={this.state.namasekolah} onChange={this.handleNamaSekolah}/>
                </div>
                <div className="form-group">
                    <label htmlFor="alamat">Alamat</label>
                    <input type="text" className="form-control" id="alamat" placeholder="Alamat" required={true} value={this.state.alamat} onChange={this.handleAlamat}/>
                </div>
                <div className="form-group">
                    <label htmlFor="status">Status Sekolah</label>
                    <select className="form-control" id="status" value={this.state.status} onChange={this.handleStatus}>
                        <option value="n">Negeri</option>
                        <option value="s">Swasta</option>
                    </select>
                </div>
                <div className="form-group">
                    <label htmlFor="email">Email untuk login</label>
                    <input type="email" className="form-control" id="email" placeholder="Email untuk login" required={true} value={this.state.email} onChange={this.handleEmail}/>
                </div>
                <div className="form-group">
                    <label htmlFor="password">Kata Sandi</label>
                    <input type="password" className="form-control" id="password" placeholder="Kata Sandi" minLength="6" required={true} value={this.state.password} onChange={this.handlePassword}/>
                </div>
                <button type="submit" className="btn btn-primary">Kirim</button>
            </form>
        )
    }
}

if (document.getElementById('daftarmanual')) {
    ReactDOM.render(<DaftarManual/>, document.getElementById('daftarmanual'));
}
