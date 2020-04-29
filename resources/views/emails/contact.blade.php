<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome {{ env('APP_NAME') }}</title>
	<style>
		*, body {
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<div style="background-color: #f2f2f2; width: 100%; height: 100%; padding: 12px;">
		<table align="center" border="0" cellpadding="0" cellspacing="0" style="display:block; background-color: white; max-width:660px; margin:20px auto; border:1px solid #ececec; border-radius:5px">
		<tbody style="display:block; width:100%">
			<tr style="display:block; width:100%">
				<td style="min-width: 660px">
					<img style="width:240px; display:block; position: relative; margin: 24px auto" src="https://maisvoz.com.br/theme/logo-black.png" alt="Mais Voz" class="CToWUd">
					<h1 style="font-size:25px; line-height:30px; font-weight:400; margin:50px 0 25px 0; padding: 0 18px 0; color:#202638; font-family:sans-serif">{{ $subject }}</h1>
				    <code style="padding: 0 18px 0; font-size:12px; font-weight:200; font-family:sans-serif; line-height:24px; margin:0 0 15px 0">
						<b>{{ $name }} ({{ $email }})</b>
					</code>
					<hr style="border:0;margin:.6rem 0;border-bottom:1px solid #ccc">
					<p style="padding: 0 18px 0; font-size:16px; font-weight:200; font-family:sans-serif; line-height:24px; margin:0 0 15px 0;font-style: italic">
						{{ $body }}
					</p>
				    {{--<img style="width: 100%; height: auto;" src="https://leasingback.com/images/imagem-email.jpg">--}}
				</td>
			</tr>
		</tbody>
		</table>
	</div>
</body>
</html>
