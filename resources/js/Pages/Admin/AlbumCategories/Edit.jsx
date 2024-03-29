import Layout from "@/Layouts/Admin/Layout";
import InputErrors from "@/components/Admin/InputErrors";
import { Link, useForm } from "@inertiajs/react";

const AlbumCategoryEdit = ({ user_auth, category }) => {
    const { data, setData, patch, errors } = useForm({
        category_name: category.category_name,
    });

    const handleInputChange = (e) => {
        const { name, value } = e.target;
        setData(name, value);
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        patch(route('categories.update', category.id));
    }

    return (
        <Layout user_auth={user_auth}>
            <h2>Modifica categoria</h2>

            <InputErrors errors={errors} />

            <form onSubmit={handleSubmit}>
                <div className="mb-3">
                    <label htmlFor="category_name">Nome categoria</label>
                    <input type="text" name="category_name" id="category_name" className="form-control"
                        value={data.category_name} onChange={handleInputChange} placeholder="Nome categoria" />
                </div>

                <div className="mb-3">
                    <button className="btn cb-primary me-3">Modifica</button>
                    <Link href={route('categories.index')} className="btn btn-secondary">Torna indietro</Link>
                </div>
            </form>
        </Layout>
    )

}

export default AlbumCategoryEdit;