document.getElementById('baixar').addEventListener('click', function() {
            // Esconde o botão e altera o fundo do body
            const body = document.querySelector('body');
            body.style.width='666px';
            body.style.background = 'white';
            body.style.border = 'none';
            body.style.borderRadius = '0';
            body.style.margin = '3rem';
            body.style.overflow='hidden';
            body.style.padding='0';
            document.querySelector('#baixar').style.display = 'none';

            // Usando o método html2pdf para gerar o PDF com margens ajustadas
            const element = document.body;

            // Definindo as margens do PDF
            const options = {
                margin: [ 9, 0.5, 21, 0.5],  // Margens (topo, direita, fundo, esquerda) em mm
                filename: 'exemplo.pdf',
                html2canvas: {
                    useCORS: true,
                    logging: false,
                    allowTaint: true,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4', // Formato do PDF
                    orientation: 'portrait', // Orientação vertical (pode alterar para landscape se preferir)
                }
            };

            // Gerar o PDF com as opções de margens
            html2pdf(element, options);
                        window.location.reload();
        });