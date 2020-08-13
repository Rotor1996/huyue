<template>
	<view class="wrap">
		<u-form :model="form" ref="uForm">
			<u-form-item label="邮箱" prop="email" label-width="150rpx">
				<u-input v-model="form.email" placeholder="请输入邮箱" />
			</u-form-item>
			<u-form-item label="用户名" prop="userName" label-width="150rpx">
				<u-input v-model="form.userName" placeholder="请输入用户名" />
			</u-form-item>
			<u-form-item label="密码" prop="passWord" label-width="150rpx">
				<u-input :password-icon="true" type="password" v-model="form.passWord" placeholder="请输入密码" />
			</u-form-item>
			<u-form-item label="确认密码" prop="confirmPassWord" label-width="150rpx">
				<u-input type="password" v-model="form.confirmPassWord" placeholder="请输入确认密码" />
			</u-form-item>
		</u-form>
		<u-button @click="register" type="primary">确认注册</u-button>
	</view>
</template>

<script>
	import {
		index_ajax
	} from "@/utils/util.js";
	export default {
		data() {
			return {
				form: {
					email: '',
					userName: '',
					passWord: '',
					confirmPassWord: '',
				},
				rules: {
					email: [{
							required: true,
							message: '请输入邮箱',
							trigger: ['change', 'blur'],
						},
						{
							type: 'email',
							message: '请输入正确的邮箱',
							trigger: ['change', 'blur'],
						}
					],
					userName: [{
							required: true,
							message: '请输入用户名',
							// 可以单个或者同时写两个触发验证方式 
							trigger: ['change', 'blur'],
						},
						{
							min: 6,
							message: '用户名长度不可小于6位',
							trigger: ['change', 'blur']
						}
					],
					passWord: [{
							required: true,
							message: '请输入密码',
							trigger: ['change', 'blur'],
						},
						{
							min: 6,
							message: '密码长度不可小于6位',
							trigger: ['change', 'blur'],
						}
					],
					confirmPassWord: [{
							required: true,
							message: '请确认密码',
							trigger: ['change', 'blur'],
						},
						{
							validator: (rule, value, callback) => {
								return value === this.form.passWord;
							},
							message: '两次输入的密码不相等',
							trigger: ['change', 'blur'],
						}
					]
				},
				labelPosition: 'left',
				buttonStyle:{
					color:'dddddd',
					backgroundColor:'#rgb(253, 243, 208)'
				}
			}
		},
		onReady() {
			this.$refs.uForm.setRules(this.rules);
		},
		methods: {
			//注册
			register() {
				let that = this
				that.$refs.uForm.validate(valid => {
					if (valid) {
						index_ajax("/register", 'POST', {
							name: that.form.userName,
							email: that.form.email,
							password: that.form.passWord
						}, function(res) {
							console.log(res)
						})
					} else {
						uni.showToast({
							icon:'none',
							title:'请完善信息'
						})
					}
				});
				
			},
		}
	}
</script>

<style>
	.wrap {
		padding: 30rpx;
	}
	
</style>
