class SistemaQuestionarios{
    constructor(){
        this.usuarioLogado = null;
        this.init();
    }

    init(){
        this.carregarMenu();
        this.carregarConteudoInicial();
        this.configurarEventos();
    }
    carregarMenu(){
        const menu = document.getElementById('menu');
        menu.innerHTML =
        <ul>
            <li><a href="#" onClick="sistema.carregarLogin()">Login</a></li>
            <li><a href="#" onClick="sistema.carregarCadastroUsuario()">Cadastro</a></li>  
            <li class="admin-only hidden"><a href="#" onClick="sistema.carregarCriarPergunta()">Criar Pergunta</a></li>  
            <li class="admin-only hidden"><a href="#" onClick="sistema.carregarListarPergunta()">Listar Perguntas</a></li>  
            <li class="aluno-only hidden"><a href="#" onClick="sistema.carregarResponderQuestionario()">Responder Questionário</a></li>  
            <li class="logged-in hidden"><a href="#" onClick="sistema.logout()">Sair</a></li>  
        </ul>
        ;  
    }
    configurarEventos(){

    }
    async carregarConteudoInicial(){
        const content = document.getElementById('content');
        content.innerHTML=
        <div class="welcome">
            <h2>Bem vindo ao sistema de questionários</h2>
            <p>Faça login ou cadestre-se</p>
        </div>
        ;
    }
    async carregarLoguin(){
         const content = document.getElementById('content');
         content.innerHTML=
            <div class="form-container">
                <h2>Login</h2>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required></input>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required></input>
                    </div>
                    <button type="submit" class="btn">Entrar</button>
                </form>
                <div id="loginMessenger"></div>
            </div>
         ;
        document.getElementById('loginForm').addEventListener('submit',(e)=>{
            e.preventDefault();
            this.fazerLogin();
        });
    }
}
