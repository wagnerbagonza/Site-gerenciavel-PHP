
</section>
<!--CONTENT-->
<div id="clear"></div><!--CLEAR-->
</div><!--BOX-->

<footer id="footer">
	<div id="footer_login">
    <table border="0">
    <form name="login" method="POST" action="<?php echo $loginFormAction; ?>">
  <tr>
    <td colspan="3" class="restrito">AREA RESTRITA</td>
  </tr>
  <tr>
    <td>Usuario:</td>
    <td><input type="text" name="login" require /></td>
    <td rowspan="2"><input type="submit" value="Logar" class="btn_login" /></td>
  </tr>
  <tr>
    <td>Senha:</td>
    <td><input type="password" name="senha" require /></td>
  </tr>
  </form>
</table>

    </div><!--FOOTER LOGIN-->
    
    <div id="footer_empresa">
    &copy;<?php echo date('Y'); ?> Info News - Todos os Direitos Reservados
    <p>Centro Universitario Senac - SP</p>
    </div><!--FOOTER EMPRESA-->
    
    <div id="footer_ass">
    <p class="restrito">DESENVOLVEDORES</p>
    Uilton Rocha<br/>
    Wagner Ferreira<br/>
    Douglas Ferreira<br/>
    </div><!--FOOTER ASS-->
</footer><!--FOOTER-->
</body>
</html>