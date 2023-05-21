<?php
    include('nav.php')
?>
    <main>
        <div class="container">
            <div class="info">
                <div class="status">
                    <ul>
                        <li class="green-text">Cadastro</li>
                        <li class="green-text bar"></li>
                        <li class="green-text"><span class="material-symbols-outlined">check</span></li>
                        <li class="green-text bar"></li>
                        <li>Pagamento</li>
                        <li class="bar"></li>
                        <li><span class="material-symbols-outlined">check</span></li>
                        <li class="bar"></li>
                        <li>Envio</li>
                    </ul>
                </div>
                <div class="account">
                    <h3>Detalhes da conta</h3>
                    <form action="result.php" method="POST">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">

                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password">

                        <div class="flex-form">
                            <div id="age-field">
                                <label for="age">Idade</label>
                                <input type="number" id="age" name="age">
                            </div>
                            <div>
                                <label for="state">Estado</label>
                                <select id="state-field" id="state" name="state">
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Espirito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                </select>
                            </div>
                        </div>
                        <label for="gender">Gênero</label>
                        <ul class="gender">
                            <li><input type="radio" name="gender" id="masc" value="Masculino" checked><label for="masc">Masculino</label></li>
                            <li><input type="radio" name="gender" id="fem" value="Feminino"><label for="fem">Feminino</label></li>
                            <li><input type="radio" name="gender" id="others" value="Outros "><label for="others">Outros</label></li>
                        </ul>

                        <label for="interest">Interesses</label>
                        <ul class="interest">
                            <li><input type="checkbox" name="interest[]" value="Futebol" id="futebol"><label for="futebol">Futebol</label></li>
                            <li><input type="checkbox" name="interest[]" value="Games" id="games"><label for="games">Games</label></li>
                            <li><input type="checkbox" name="interest[]" value="Moda" id="moda"><label for="moda">Moda</label></li>
                            <li><input type="checkbox" name="interest[]" value="Humor" id="humor"><label for="humor">Humor</label></li>
                            <li><input type="checkbox" name="interest[]" value="Carros" id="carros"><label for="carros">Carros</label></li>
                            <li><input type="checkbox" name="interest[]" value="Natureza" id="natureza"><label for="natureza">Natureza</label></li>
                            <li><input type="checkbox" name="interest[]" value="Ciência" id="ciencia"><label for="ciencia">Ciência</label></li>
                            <li><input type="checkbox" name="interest[]" value="Arte" id="arte"><label for="arte">Arte</label></li>
                        </ul>
                        
                        <label for="more">Observações</label>
                        <textarea name="more" id="more"></textarea>

                        <div class="buttons-container">
                            <div class="buttons">
                                <a href="#">Entrar com outra conta</a>
                                <button>Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="product-container">
                <div class="order-summary">
                    <h3>Resumo do pedido</h3>
                    <div class="order-info">
                        <div class="product">
                            <img src="assets/mouse.png">
                            <div class="info-container">
                                <div class="infos">
                                    <p class="name">Mouse Gamer Redragon</p>
                                    <p class="price">R$124,90</p>
                                </div>
                                <div class="amount">
                                    <span class="controller sub"><span class="material-symbols-outlined">check_indeterminate_small</span></span>
                                    <span class="amount-number">2</span>
                                    <span class="controller add"><span class="material-symbols-outlined">add</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="ticket">
                            <input type="text" placeholder="Cupom de desconto">
                            <button>Aplicar</button>
                        </div>
                        <div class="prices">
                            <div class="tax">
                                <div class="title">
                                    Taxa
                                </div>
                                <div class="value">
                                    R$3,45
                                </div>
                            </div>
                            <div class="dispatch">
                                <div class="title">
                                    Envio
                                </div>
                                <div class="value green">
                                    Grátis
                                </div>
                            </div>
                            <div class="total">
                                <div class="title bold">
                                    Total
                                </div>
                                <div class="value bold">
                                    R$249,80
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>