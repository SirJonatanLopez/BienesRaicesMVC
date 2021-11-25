/// <reference types="cypress" />
describe('Prueba el formulario de contacto', () =>{
    it('Prueba la página de contacto y el envio de emails', () => {
        cy.visit('/contacto');
        cy.get('[data-cy="heading-contacto"]').should('exist');
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('equal', 'Contacto');

        cy.get('[data-cy="heading-formulario"]').should('exist');
        cy.get('[data-cy="heading-formulario"]').invoke('text').should('equal', 'Por favor, llene el formulario de contacto');

        
    });

    it('Llena los campos del formulario', () => {
        cy.get('[data-cy="input-nombre"]').type('Jonatan');
        cy.get('[data-cy="input-mensaje"]').type('Deseo vender mis 20 casas');
        cy.get('[data-cy="input-opciones"]').select('Compra');
        cy.get('[data-cy="input-precio"]').type(500000);
        cy.get('[data-cy="forma-contacto"]').eq(1).check();

        cy.wait(3000);
        cy.get('[data-cy="forma-contacto"]').eq(0).check();
        cy.get('[data-cy="input-telefono"]').type('2687423658');
        cy.get('[data-cy="input-fecha"]').type('2021-04-29');
        cy.get('[data-cy="input-hora"]').type('08:15');

        cy.get('[data-cy="formulario-contacto"]').should('exist');
        cy.get('[data-cy="formulario-contacto"]').submit();
    });
})