<?PHP
if	(isset($_POST[tegn]))	{	
				$tabel=$_POST[hvilkentabel];	
				$antalkol=$_POST[antalkol];	
				$optiltal=$_POST[optiltal];
				echo	"<table style='border:	1px	solid magenta; border-spacing: 0px;'><tr> ";	
				$i=0;	
				for	($j	=	$tabel;	$j	<=	$optiltal;	$j	=	$j	+	$tabel){	
								$i++;	
								if	($i==($antalkol+1)){	
												echo	"</tr><tr>";	
												$i=1;	
								}	
								echo	"<td style='border:1px solid magenta;'>".$j."</td>";	
				}					
				echo	"</tr></table><br><br>";	
}	
?>
<form	method="post">
	 Hvilken	tabel	ønsker	du	at	lave	?	<input	type="number"	name="hvilkentabel"><br>	
	 Hvormange	kolloner	ønsker	du	?	<input	type="number"	name="antalkol"><br>	n
	 Hvad	skal	det	største	tal	være	?	<input	type="number"	name="optiltal"><br>
	 	
	 <input	type="submit"	name="tegn"	value="tegn">	
</form>
