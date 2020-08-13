<template>
	<view class="content">
		<view class="read-tab">
			<view class="tab-info">
				<view>1</view>
				<view>助我</view>
			</view>
			<view class="tab-info">
				<view>2</view>
				<view>已助</view>
			</view>
			<view class="tab-info">
				<view>3</view>
				<view>互助</view>
			</view>
		</view>
		<view class="button-tab">
			<button>发布公号</button>
		</view>
		<view class="read-list">
			
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<text>互阅平台</text>
					</view>
					<view class="middle-buttom">
						<text>运营到底怎么做？怎样的文章会被关注</text>
					</view>
				</view>
				<view class="item-right">
					<button>粉它</button>
					<view>粉它200人</view>
					<view>助粉38人</view>
				</view>
			</view>
			
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {}
		},
		methods: {

		}
	}
</script>

<style>
	.content{
		
	}
	.read-tab{
		display: flex;
		width: 98%;
		margin: 0 auto;
		text-align: center;
	}
	.tab-info{
		width: 33%;
	}
	.button-tab{
		display: flex;
	}
	.announcement{
		width: 98%;
		margin: 0 auto;
		text-align: center;
		color: #007AFF;
		background-color: #999999;
		padding-top: 20rpx;
		padding-bottom: 20rpx;
	}
	.read-list{
		width: 95%;
		margin: 0 auto;
		font-size: 25rpx;
	}
	.list-item{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.item-left{
		width: 10%;
	}
	.item-left image{
		width: 80rpx;
	}
	.item-middle{
		padding-left: 30rpx;
		width: 70%;
	}
	.item-middle .middle-top{
		display: flex;
		align-items: center;
	}
	.item-middle .middle-top image{
		width: 40rpx;
	}
	.item-right{
		width: 20%;
	}
</style>
