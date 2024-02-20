# CRUD UPLOAD DE ARQUIVOS EM PHP
👨‍🏫CRUD DE MULTIMIDIAS EM HTML, CSS, PHP E MYSQL.

<img src="./IMAGENS/FOTO_1.png" align="center" width="500"> <br> 
<img src="./IMAGENS/FOTO_2.png" align="center" width="500"> <br> 
<img src="./IMAGENS/FOTO_3.png" align="center" width="500"> <br> 
<img src="./IMAGENS/FOTO_4.png" align="center" width="500"> <br> 
<img src="./IMAGENS/FOTO_5.png" align="center" width="500"> <br> 
<img src="./IMAGENS/FOTO_6.png" align="center" width="500"> <br> 

## DESCRIÇÃO:
O aplicativo [CRUD](./CRUD.md) de upload de arquivos em PHP e MySQL é uma ferramenta simples, mas poderosa, que permite aos usuários gerenciar facilmente o armazenamento e a manipulação de arquivos em um sistema web. Com este aplicativo, os usuários podem realizar uma variedade de tarefas relacionadas a arquivos, incluindo upload, visualização, edição e exclusão, tudo através de uma interface amigável e intuitiva:

1. **Upload de Arquivos**:
   - Os usuários podem fazer upload de arquivos para o sistema através de um formulário na página principal do aplicativo.
   - O formulário inclui um campo de seleção de arquivo que permite aos usuários escolher o arquivo desejado em seu dispositivo local.
   - Após o envio do arquivo, ele é transferido para o servidor e armazenado em um diretório específico, enquanto os detalhes do arquivo (como nome, tamanho e tipo) são registrados no banco de dados MySQL.

2. **Listagem de Arquivos**:
   - Todos os arquivos que foram enviados para o sistema são listados em uma tabela na página principal do aplicativo.
   - A tabela exibe detalhes importantes de cada arquivo, como ID, nome, tamanho, tipo e data de upload.
   - Os usuários podem visualizar rapidamente todos os arquivos que foram enviados e suas informações associadas.

3. **Visualização de Arquivos**:
   - Os usuários têm a opção de visualizar arquivos individualmente clicando em um link de visualização ao lado de cada arquivo na tabela.
   - Ao clicar no link, os usuários podem ver uma visualização do arquivo (por exemplo, uma imagem) na mesma página ou em uma nova janela, dependendo do tipo de arquivo.

4. **Edição de Arquivos**:
   - Os usuários podem editar os detalhes dos arquivos, como nome, diretamente na tabela de listagem de arquivos.
   - Isso é possível através de um link de edição ao lado de cada arquivo, que redireciona os usuários para uma página de edição específica.

5. **Exclusão de Arquivos**:
   - Os usuários têm a capacidade de excluir arquivos do sistema clicando em um link de exclusão ao lado de cada arquivo na tabela.
   - Ao clicar no link, uma confirmação pode ser solicitada para evitar exclusões acidentais. Depois de confirmada, a exclusão do arquivo é realizada.

6. **Interface Responsiva**:
   - A interface do aplicativo é projetada para ser responsiva, garantindo uma experiência de usuário consistente em diferentes dispositivos e tamanhos de tela.
   - Elementos de design são adaptáveis e organizados de forma a facilitar a navegação e a interação do usuário.

Esses recursos combinados proporcionam aos usuários uma maneira eficiente de fazer upload, gerenciar e manipular arquivos dentro do sistema, permitindo uma experiência de usuário intuitiva e fácil de usar.

## COMO USAR?
### BAIXANDO O PROJETO:
* Clone o repositório para o seu sistema local:

```bash
git clone https://github.com/VILHALVA/CRUD-UPLOAD-DE-ARQUIVOS-EM-PHP.git
```

* Navegue até o diretório do projeto.

```bash
cd CRUD-UPLOAD-DE-ARQUIVOS-EM-PHP
```

* Descompacte o arquivo ZIP (se você baixou manualmente):

```bash
unzip CRUD-UPLOAD-DE-ARQUIVOS-EM-PHP.zip
```

### EXECUTANDO O PROJETO:
1. **Configuração do Banco de Dados:**

   - Crie um banco de dados [MySQL](./CODIGO/database.sql) chamado `upload`:
   ```sql
   CREATE DATABASE UPLOAD;
   ```
   - Execute o seguinte comando SQL para criar a tabela `files`:

   ```sql
   CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
   ```

2. **Configuração do PHP:**

   - Abra o arquivo `config.php` e ajuste as configurações do banco de dados:

     ```php
     $servername = "localhost";
     $username = "seu_usuario";
     $password = "sua_senha";
     $dbname = "UPLOAD";
     ```

3. **Executando o Aplicativo:**

   - Coloque os arquivos em um servidor web compatível com PHP (por exemplo, XAMPP, WAMP, LAMP).
   - Acesse o formulário no navegador visitando `http://localhost/CODIGO/index.php`.

## NÃO SABE?
- Entendemos que para manipular arquivos em `HTML`, `CSS` e outras linguagens relacionadas, é necessário possuir conhecimento nessas áreas. Para auxiliar nesse aprendizado, oferecemos cursos gratuitos disponíveis:
* [CURSO DE HTML E CSS](https://github.com/VILHALVA/CURSO-DE-HTML-E-CSS)
* [CURSO DE PHP](https://github.com/VILHALVA/CURSO-DE-PHP)
* [CURSO DE MYSQL](https://github.com/VILHALVA/CURSO-DE-MYSQL)
* [CURSO DE MYSQL COM PHP](https://github.com/VILHALVA/CURSO-DE-MYSQL-COM-PHP)
* [CONFIRA MAIS CURSOS](https://github.com/VILHALVA?tab=repositories&q=+topic:CURSO)

## CREDITOS:
- [PROJETO CRIADO PELO VILHALVA](https://github.com/VILHALVA)




