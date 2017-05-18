<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>借贷咨询服务</title>
    <link rel="stylesheet" href="css/creditInfo.css" />
</head>
<body>
	<div class="form-wraper">
		<form class="login_msg" action="/setClientsData" method="post" id="form">
			{{ csrf_field() }}
			<ul class="list-wraper">
				<li>
					<input type="text" class="input-text" placeholder="姓名:" name="username" datatype="s"  errormsg="姓名不能为空"/>
				</li>
				<li>
					<input type="tel" class="input-text" placeholder="电话:" name="telephone" datatype="m"/>
				</li>
				<li>
					<input type="number" class="input-text" placeholder="借款金额:" name="total" datatype="n"/>
				</li>
				<li style="color: #333;">
					<label class="loadway">借款方式</label><br />
					<input type="checkbox" name="type[]" value="1"  id="gjjd"/><label for="gjjd">公积金贷</label>
					<input type="checkbox" name="type[]" value="2"  id="sbd"/><label for="sbd">社保贷</label>
					<input type="checkbox" name="type[]" value="3"  id="gzd"/><label for="gzd">工资贷</label><br />
					<input type="checkbox" name="type[]" value="4" id="fcd"/><label for="fcd">房车贷</label>
					<input type="checkbox" name="type[]" value="5"  id="syd"/><label for="syd">生意贷</label>
				</li>
				<li>
					<input type="button" id="submitBtn" value="确认咨询"/>
					<p id="SubBtnInfo">温馨提示:稍后会有客服人员与您联系</p>
				</li>
				<p class="info" style="margin-top:0%;"><span class="info-mark">*&nbsp;</span>人民银行征信免费查询</p>
				<p class="info"><span class="info-mark">*&nbsp;</span>借贷咨询服务认准正规机构</p>
			</ul>
		</form>
	</div>
</body>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/Validform_v5.3.2_ncr_min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){		
		$(".login_msg").Validform({
			tiptype:function(msg,o,cssctl){
				//msg：提示信息;
				//o:{obj:*,type:*,curform:*}, obj指向的是当前验证的表单元素（或表单对象），type指示提示的状态，值为1、2、3、4， 1：正在检测/提交数据，2：通过验证，3：验证失败，4：提示ignore状态, curform为当前form对象;
				//cssctl:内置的提示信息样式控制函数，该函数需传入两个参数：显示提示信息的对象 和 当前提示的状态（既形参o中的type）;
				if(!o.obj.is("form")){//验证表单元素时o.obj为该表单元素，全部验证通过提交表单时o.obj为该表单对象;
					var objtip=o.obj.siblings(".Validform_checktip");
					cssctl(objtip,o.type);
					objtip.text(msg);
				}
			}
		});

		var submitBtn=document.getElementById("submitBtn");
		var SubBtnInfo=document.getElementById("SubBtnInfo");
		var form = document.getElementById('form');
		submitBtn.onmouseup=function(){
			submitBtn.value="已发送";
//			SubBtnInfo.style.display="block";
			SubBtnInfo.style.opacity="1";
			form.submit();
		}
	})
</script>
</html>