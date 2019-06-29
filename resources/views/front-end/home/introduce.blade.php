@extends('front-end.base')
@section('style')
	<style type="text/css">
		a.link-a{
			color: #a9abad;
			text-decoration: none;
		}
		a.link-a:hover{
			color:#2ae50d;
		}
		@media(min-width: 360px) and (max-width: 480px){
			h3{
				text-align: center;
			}
		}
	</style>
@endsection
@section('content')
	<section class="content pb-5">
				<div class="container">
					<div class="row pt-4 pl-3 pb-3 link-li">
						<a href="{{route('home')}}" class="link-a"> Trang chủ / </a>
						<a href="{{route('introduce')}}" class="link-a"> Giới thiệu</a>
					</div>


					<div class="row pt-4">
						<h3>Giới Thiệu về ThanhBinhShop</h3>
						<p>Công ty thời trang ThanhBinhShop được thành lập từ tháng 3 năm 2010, là một trong những thương hiệu thời trang nam uy tín hàng đầu Việt Nam. Với sự quản lý chặt chẽ, chuyên nghiệp của đội ngũ quản lý; Nỗ lực sáng tạo không ngừng của bộ phận thiết kế, Sự tận tâm của nhân viên bán hàng… là những yếu tố làm nên thương hiệu thời trang ThanhBinhShop lớn mạnh như hiện nay.
 
						ThanhBinhShop luôn quan niệm thời trang là sự tìm tòi và sáng tạo nên những sản phẩm của ThanhBinhShop đều được thiết kế riêng với sự trẻ trung, hiện đại để mang lại guu thời trang hợp mốt nhất cho các bạn trẻ. Các dòng sản phẩm của ThanhBinhShop không ngừng đa dạng về kiểu dáng, mẫu mã từ áo sơ mi, áo thun, áo khoác, áo vest, quần jean, quần tây, quần kaki… đến các phụ kiện thời trang vô cùng sành điệu, tất cả tạo nên vẻ đẹp hoàn hảo, hiện đại, phong cách cho phái mạnh
						 
						Bên cạnh đó ThanhBinhShop luôn đặt mình vào tâm lý và quyền lợi của khách hàng để tung ra những sản phẩm thời trang chất lượng tốt nhất, mẫu mã cực đẹp, mới lạ nhưng với giá cả cực kì hấp dẫn, cạnh tranh nhất.
						 
						Hiện nay, thương hiệu thời trang nam ThanhBinhShop đã và đang phát triển ngày càng lớn mạnh thành một hệ thống với nhiều chi nhánh cửa hàng bán lẻ tại TPHCM, Đồng Nai, Vũng Tàu, An Giang, Kiên Giang. Ngoài ra, nhằm tạo sự tiện lợi mua sắm tối đa cho khách hàng, ThanhBinhShop phát triển hệ thống bán hàng online, giao hàng đến tận tay người tiêu dùng trên toàn quốc. Giờ đây ngay tại nhà bạn cũng có thể chọn cho mình những sản phẩm phù hợp với sở thích và phong cách qua website: www.ThanhBinhShopshop.com
						 
						Đến với ThanhBinhShop, chúng tôi luôn tận tâm tư vấn giúp quý khách tìm được những sản phẩm yêu thích, phù hợp với nhu cầu và góp phần tạo nên phong cách cho riêng mình!</p>
					</div>
				</div>
			</section>
@endsection
