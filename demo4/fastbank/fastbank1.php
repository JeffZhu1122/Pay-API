
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<title>国富通，快捷支付演示-绑卡</title>
</head>
<body>
<form method="post" action="http://pay.gzspkp.cn/ucfastbanksubmit" >
<table style=" width:500px; margin:auto;">
	<tr>
		<td width="100">商户ID</td>
		<td width="400"><input type="text" name="customerid" value="10000"></td>
	</tr>
	<tr>
		<td>商户密钥</td>
		<td><input type="text" name="key" value="7897062fc648ca140512b0c7bf66ff67009e1e86"></td>
	</tr>
	<tr>
		<td>支付类型</td>
		<td><input type="text" name="paytype" value="cufastbank"></td>
	</tr>
	<tr>
		<td>接口编码</td>
		<td><input type="text" name="command" value="1"></td>
	</tr>
	<tr>
		<td width="100">用户ID</td>
		<td width="400"><input type="text" name="memberId" value="10000"></td>
	</tr>
	<tr>
		<td>订单编号</td>
		<td><input type="text" name="orderNum" value="<?php echo time()+mt_rand(1000,9999);?>"></td>
	</tr>
	<tr>
		<td>证件类型</td>
		<td>
			<select name="idType">
				<option value="01">身份证</option>
	 
			</select>
		</td>
	</tr>
	<tr>
		<td>证件编号</td>
		<td><input type="text" name="idNo" value=""></td>
	</tr>
	<tr>
		<td>姓名</td>
		<td><input type="text" name="accountName" value=""></td>
	</tr>
	<tr>
		<td>预留手机号</td>
		<td><input type="text" name="phone" value=""></td>
	</tr>
	<tr>
		<td>银行卡号</td>
		<td><input type="text" name="bankCard" value=""></td>
	</tr>
	<tr>
		<td>卡类型</td>
		<td>
			<select name="cardType">
				<option value="01">借记卡</option>
			 
			</select>
		</td>
	</tr>
	<tr>
		<td>4位定长2015年7月为0715</td>
		<td><input type="text" name="expireDate" value=""></td>
	</tr>
	<tr>
		<td>银行卡cvn2</td>
		<td><input type="text" name="cvn2" value=""></td>
	</tr>
	<tr>
		<td> </td>
		<td><input type="submit" name="submit" value="提交"></td>
	</tr>
 
</table>
</form>
 
</body>
</html>