import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from 'react-bootstrap/Table';


export default function Weapon(props) {
    console.log(props.weapons);
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Hero</h2>}
        >
            <Head title="Hero" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center align-middle">
                    <Table striped bordered hover  variant="dark">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Weapon Name</th>
                                <th>Damage</th>
                                <th>Range</th>
                                <th>UserCount</th>
                                <th>UserList</th>
                            </tr>
                        </thead>
                        <tbody>
                           {
                                props.weapons.map((weapon, weaponindex)=>
                                        weapon.heros.map((hero, index)=>
                                            <tr key={index}>
                                                { !index &&                                        
                                                    <>
                                                        <td rowspan={weapon.heros.length}>{weaponindex+1}</td>
                                                        <td rowspan={weapon.heros.length}>{weapon.name}</td>
                                                        <td rowspan={weapon.heros.length}>{weapon.damage}</td>
                                                        <td rowspan={weapon.heros.length}>{weapon.is_range}</td>
                                                        <td rowspan={weapon.heros.length}>{weapon.user_count}</td>
                                                    </>
                                                }
                                                <td>{hero.name}</td>
                                            </tr>
                                    )
                                )
                           }
                        </tbody>
                    </Table>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
