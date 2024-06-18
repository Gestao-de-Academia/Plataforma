/* function display_tables(){
  const links = document.querySelectorAll('a[js="links_adm"]');
  const tables = document.querySelectorAll('.table_sql');

 /*  links.forEach(link => {
      link.addEventListener('click', (event) => {
          event.preventDefault(); 
          
          const tableId = link.getAttribute('data-table');
          const tableToShow = document.getElementById(tableId);

          // Verifica se o link já está ativo 
          if (link.classList.contains('activelink')) {
              tableToShow.classList.remove('active');
              link.classList.remove('activelink');
          } else {
              // Esconde todas as tabelas e remove a classe 'activelink' de todos os links
              links.forEach(link => link.classList.remove('activelink'));
              tables.forEach(table => table.classList.remove('active'));

              // Mostra apenas a tabela correspondente e destaca o link
              tableToShow.classList.add('active');
              link.classList.add('activelink'); 
          }
      });
  });
}

display_tables(); */
