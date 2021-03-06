<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="search-container">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <span class="text-muted">
                                    <img src="../res/site/img/logo.png" alt="" style="width: 110%;"><br><br>
                                    <p class="lead">Este formulario é de carater obrigatório. O <strong>não preenchimento</strong> do mesmo acarretará no não recebimento das nossas notícias <strong>via lista de transmissão no WhatsApp.</strong></p>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Seus dados</h4>
                        <form class="needs-validation" novalidate action="" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Primeiro nome</label>
                                    <input type="text" class="form-control" id="desfirstname" name="desfirstname" placeholder="Primeiro Nome" value="" required>
                                    <div class="invalid-feedback">
                                        Campo obrigatório
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Último Nome</label>
                                    <input type="text" class="form-control" id="deslastname" name="deslastname" placeholder="Último Nome" value="" required>
                                    <div class="invalid-feedback">
                                        Campo obrigatório
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="dessex">Sexo</label>
                                    <select class="custom-select d-block w-100" id="dessex" name="dessex" required>
                                        <option value="">Selecione o seu sexo...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Insira um sexo válido
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="desdate">Data de Nascimento</label>
                                    <input type="text" class="form-control" id="desdate" name="desdate" placeholder="03/08/1992" data-mask="00/00/0000" required>
                                    <div class="invalid-feedback">
                                        Insira um sexo válido
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="nrphone">Celular/Whatsapp</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Celular/Whatsapp" data-mask="(00)000000000" maxlength="9" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Campo obrigatório
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email
                                </label>
                                <input type="email" class="form-control" id="desemail" name="desemail" placeholder="exemplo@exemplo.com">
                                <div class="invalid-feedback">
                                    Digite um endereço de e-mail válido.
                                </div>
                            </div>
                            <div class="col-md-5 mb-3" style="margin-left: -15px;">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="deszipcode" name="deszipcode" placeholder="" data-mask="00000-000" required maxlength="8">
                                    <div class="invalid-feedback">
                                        Insira um cep válido
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Endereço</label>
                                <input type="text" class="form-control" id="desaddress" name="desaddress" placeholder="Exemplo: Av. Princesa Isabel..." required>
                                <div class="invalid-feedback">
                                    Por favor insira seu endereço.
                                </div>
                            </div>
                            <div class="col-md-5 mb-3" style="margin-left: -15px;">
                                    <label for="numero">Número</label>
                                    <input type="number" class="form-control" id="desnumber" name="desnumber" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Insira um número válido
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="complemento">Complemento
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="text" class="form-control" id="descomplement" name="descomplement" placeholder="Exemplo: Casa 1">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="numero">Bairro</label>
                                    <input type="text" class="form-control" id="desdistrict" name="desdistrict" placeholder="Parque Cento e Vinte">
                                    <div class="invalid-feedback">
                                        Insira um bairro válido
                                    </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="numero">Cidade</label>
                                    <input type="text" class="form-control" id="descity" name="descity" placeholder="Francisco Morato">
                                    <div class="invalid-feedback">
                                        Insira uma cidade válida
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Estado</label>
                                    <select class="custom-select d-block w-100" id="desstate" required>
                                        <option value="">Selecione um estado...</option>
                                        <option>AC</option>
                                        <option>AL</option>
                                        <option>AP</option>
                                        <option>AM</option>
                                        <option>BA</option>
                                        <option>CE</option>
                                        <option>DF</option>
                                        <option>ES</option>
                                        <option>GO</option>
                                        <option>MA</option>
                                        <option>MT</option>
                                        <option>MS</option>
                                        <option>MG</option>
                                        <option>PA</option>
                                        <option>PB</option>
                                        <option>PR</option>
                                        <option>PE</option>
                                        <option>PI</option>
                                        <option>RJ</option>
                                        <option>RN</option>
                                        <option>RS</option>
                                        <option>RO</option>
                                        <option>RR</option>
                                        <option>SC</option>
                                        <option>SP</option>
                                        <option>SE</option>
                                        <option>TO</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Insira um estado válido
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">País</label>
                                    <select class="custom-select d-block w-100" id="descountry" name="descountry" readonly>
                                        <option value="Brasil">Brasil</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Insira um estado válido
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Concordo com a <a href="#">Política de Privacidade</a></label>
                                <p><small>Sabemos o quão importante são seus dados, então fique tranquilo, eles estão seguros com a gente.</small></p>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                              Enviar
                            </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="btn btn-primary scrollUp">
            <i class="fa fa-arrow-circle-o-up"></i>
        </a>
    </main>