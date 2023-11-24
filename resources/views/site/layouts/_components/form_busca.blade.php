<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

<form action={{ route('site.transportadora')}} name="busca_encomenda" id="busca_encomenda" method="get" onsubmit="return validarCPF()">
    @csrf
    <div class="col-lg-6 col-md-6">
        <input id="cpf" name="cpf" type="text" placeholder="CPF" class="{{ $classe }}" >
    </div> 
    <br>
    <button type="submit" class="{{ $classe }}">BUSCAR</button>
</form>
 <script>
        function validarCPF() {
            var cpf = document.getElementById("cpf").value;

            if (cpf === '') {
                alert("Insira um CPF para buscar encomenda");
                return false;
            }
            document.getElementById("busca_encomenda").submit();
        }

        $(document).ready(function() {
             $('#cpf').inputmask('99999999999', { clearIncomplete: true });
        });
</script>
     