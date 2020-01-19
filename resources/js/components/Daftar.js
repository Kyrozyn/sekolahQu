import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Alert from "@material-ui/lab/Alert";
import MaterialTable from "material-table";

export default class Daftar extends Component {
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
        let url = 'http://'+hostname+'/apisekolah'
        fetch(url)
            .then(response => response.json())
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        items: result.data,
                    })
                    const {items} = this.state;
                    console.log(items);
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
                            { title: 'Kode Wilayah', field: 'kode_wilayah' },
                            { title: 'Nama Wilayah', field: 'nama' }
                        ]}
                        data = {items}
                        title ="Silahkan pilih wilayah sekolah anda."
                        actions={[
                            {
                                icon: 'check',
                                tooltip: 'Pilih Wilayah',
                                onClick: (event, rowdata) => {
                                    let hostname = window.location.hostname+":"+window.location.port;
                                    let url = 'https://'+hostname+'/apisekolah/daerah/'+rowdata.kode_wilayah
                                    window.location.href=url
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

if (document.getElementById('daftar')) {
    ReactDOM.render(<Daftar />, document.getElementById('daftar'));
}
