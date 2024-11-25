<main>

        <!-- --------------------------Formulario-------------------------- -->

        <div class="formulario">
            <form>

                <div class="item Nome">
                    <label for="name">Nome do super:</label>
                    <input type="text" id="name" name="name" placeholder="Nome do super">
                </div>
                <div class="item Radio">
                    <label for="name">Alinhamento:</label>

                    <div class="BotaoRadio">
                        <label  for="alignment">Heroi</label>
                        <input type="radio" id="alignment"  name="alignment" value="Herói">
                    
                        <label for="alignment">Vilão</label>
                        <input type="radio" id="alignment" name="alignment" value="Vilão">
                    </div>

                </div>

                <div class="Poderes">
                    <label for="Poderes">Poderes</label>
                    <input type="text" name="Poderes" id="poderes" class="Poderes" placeholder="Poderes">
                </div>
                <div class="item Resumo">
                    <label for="abstract">Resumo:</label>
                    <textarea name="Resumo" id="Resumo" placeholder="Escreva sobre seu super"></textarea>
                </div>
                <div class="item Botao">
                    <input type="button" value="Criar" id="button">
                </div>

                <input type="button" class="Botao" value="Enviar">

            </form>
        </div>

        <!-- --------------------------Formulario-------------------------- -->

    </main>