import React from 'react';
import { useParams } from 'react-router-dom';

import { Page } from "../../components/Page";
import Form from './Form';

const PageForm = () => {

    const { id } = useParams();

    return (
        <Page title={!id ? 'Criar Membros Do Elenco' : 'Editar Membros Do Elenco'}>

            <Form />

        </Page>
    );
};

export default PageForm;