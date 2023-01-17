import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from 'react-bootstrap/Table';


export default function Hero(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Hero</h2>}
        >
            <Head title="Hero" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                    <Table striped bordered hover  variant="dark">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Hero Name</th>
                                <th>Health</th>
                                <th>Damage</th>
                            </tr>
                        </thead>
                        <tbody>
                           {
                            props.users.map((user, index)=>
                                <tr key={user.id}>
                                    <td>{index+1}</td>
                                    <td>{user.name}</td>
                                    <td>{user.health}</td>
                                    <td>{user.damage}</td>
                                </tr>
                            )
                           }
                        </tbody>
                    </Table>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
