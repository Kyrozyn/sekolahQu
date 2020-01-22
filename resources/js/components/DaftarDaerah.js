import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Alert from "@material-ui/lab/Alert";
import MaterialTable from "material-table";
import axios from "axios";
export default class DaftarDaerah extends Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: {},

        }
    }
    panggilApi() {
        let hostname = window.location.hostname+":"+window.location.port;
        let url = 'https://'+hostname+'/apisekolah/daerah/'+this.props.daerah
        fetch(url)
            .then(response => response.json())
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        items: result.data,
                    })
                    const {items} = this.state;
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    })
                    console.log(error)
                }

            )
    }

    componentDidMount() {
        this.panggilApi()
    }

    render() {
        const {error, isLoaded, items} = this.state;
        if (error) {
            return <Alert severity={"error"}>Maaf ada kesalahan dalam mengambil data sekolah. Silahkan mendaftar secara manual</Alert>
        } else if (!isLoaded) {
            return <Alert severity={"info"}>Mohon tunggu.....</Alert>
        }
        else{
            console.log(items);
            return(
                <div style={{ maxWidth: '100%' }}>
                    <MaterialTable
                        options={{
                            actionsColumnIndex: -1
                        }}
                        columns={[
                            { title: 'Nama Sekolah', field: 'sekolah' },
                            { title: 'Kecamatan', field: 'kecamatan' },
                            { title: 'Status', field: 'status' },
                            { title: 'Alamat', field: 'alamat_jalan' }
                        ]}
                        data = {items}
                        title ="Silahkan pilih sekolah anda."
                        actions={[
                            {
                                icon: 'check',
                                tooltip: 'Pilih Sekolah',
                                onClick: (event, rowdata) => {
                                    window.location = '/daftar/daftarvalidasi/'+rowdata.npsn+"/"+rowdata.sekolah+"/"+rowdata.alamat_jalan+"/"+rowdata.status
                                },
                                options: {actionsColumnIndex: -1}
                            }
                        ]}
                        localization={{
                            pagination: {
                                labelDisplayedRows: '{from}-{to} dari {count}',
                                labelRowsSelect: 'baris'
                            },
                            header: {
                                actions: 'Pilih',
                            },
                            body: {
                                emptyDataSourceMessage: 'Tidak ada data yang ditampilkan',
                                filterRow: {
                                    filterTooltip: 'Filter'
                                }
                            },
                            toolbar: {
                                searchPlaceholder: 'Cari',
                                searchTooltip: 'Cari'
                            },
                        }}
                    />
                </div>
            )
        }
    }
}

if (document.getElementById('daftardaerah')) {
    var data = document.getElementById('daftardaerah').getAttribute('daerah');
    ReactDOM.render(<DaftarDaerah daerah={data}/>, document.getElementById('daftardaerah'));
}
