<template>

	<view class="content">
		<view class="read-tab">
			<view class="tab-info">
				<view>1</view>
				<view>月饼</view>
			</view>
			<view class="tab-info">
				<view>2</view>
				<view>文章</view>
			</view>
			<view class="tab-info">
				<view>3</view>
				<view>被阅</view>
			</view>
		</view>
		<view class="button-tab">
			<button>发布文章</button>
			<button>客服</button>
		</view>
		<view class="announcement">
			<text>公告栏：我有一个远大的理想</text>
		</view>
		<view class="read-list">

			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
				</view>
			</view>
			<view class="list-item">
				<view class="item-left">
					<image mode="widthFix" src="../../static/logo.png"></image>
				</view>
				<view class="item-middle">
					<view class="middle-top">
						<image mode="widthFix" src="../../static/logo.png"></image>
						<text>震惊！白娘子来苏州了！！</text>
					</view>
					<view class="middle-buttom">
						<text>2020-05-11 09:04:08</text>
					</view>
				</view>
				<view class="item-right">
					<button>阅它</button>
					<text>无敌置顶</text>
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
	.content {}

	.read-tab {
		display: flex;
		width: 98%;
		margin: 0 auto;
		text-align: center;
	}

	.tab-info {
		width: 33%;
	}

	.button-tab {
		display: flex;
	}

	.announcement {
		width: 98%;
		margin: 0 auto;
		text-align: center;
		color: #007AFF;
		background-color: #999999;
		padding-top: 20rpx;
		padding-bottom: 20rpx;
	}

	.read-list {
		width: 95%;
		margin: 0 auto;
		font-size: 25rpx;
	}

	.list-item {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.item-left {
		width: 10%;
	}

	.item-left image {
		width: 80rpx;
	}

	.item-middle {
		padding-left: 30rpx;
		width: 70%;
	}

	.item-middle .middle-top {
		display: flex;
		align-items: center;
	}

	.item-middle .middle-top image {
		width: 40rpx;
	}

	.item-right {
		width: 20%;
	}
</style>
