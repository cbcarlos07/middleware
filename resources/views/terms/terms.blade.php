<p>Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis, nisi eros vermeio. Quem num gosta di mim que vai caçá sua turmis! Cevadis im ampola pa arma uma pindureta. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

<p>Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Viva Forevis aptent taciti sociosqu ad litora torquent. Casamentiss faiz malandris se pirulitá.</p>

<p>Suco de cevadiss deixa as pessoas mais interessantis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Delegadis gente finis, bibendum egestas augue arcu ut est. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>

@if( Session::has('error') )
    <h1 style="color: red">{{ Session::get('error') }}</h1>
@endif

<form action="{{ route('terms.accept')  }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label>
        <input type="checkbox" name="acceptTerms" value="true"> Aceito os termos de uso!
    </label><br>
    <button type="submit">Salvar</button>

</form>

