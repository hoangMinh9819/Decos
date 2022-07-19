/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/6/2022 4:55:13 PM                          */
/*==============================================================*/


drop table if exists CHI_TIET_DON_HANG;

drop table if exists DANH_GIA;

drop table if exists DOI_TAC;

drop table if exists DON_HANG;

drop table if exists HINH_ANH_SAN_PHAM;

drop table if exists HINH_ANH_SLIDE;

drop table if exists MA_GIAM_GIA;

drop table if exists NGUOI_DUNG;

drop table if exists SAN_PHAM;

drop table if exists TIN_TUC;

drop table if exists THE_LOAI;

/*==============================================================*/
/* Table: CHI_TIET_DON_HANG                                     */
/*==============================================================*/
create table CHI_TIET_DON_HANG
(
   ID_CHI_TIET_DON_HANG int not null auto_increment,
   ID_DON_HANG          int not null,
   ID_SAN_PHAM          int not null,
   SO_LUONG             int,
   TONG_CONG            float,
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   primary key (ID_CHI_TIET_DON_HANG)
);

/*==============================================================*/
/* Table: DANH_GIA                                              */
/*==============================================================*/
create table DANH_GIA
(
   ID_DANH_GIA          int not null auto_increment,
   ID_NGUOI_DUNG        int not null,
   ID_SAN_PHAM          int not null,
   NOI_DUNG             text,
   TRANG_THAI           varchar(50),
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   primary key (ID_DANH_GIA)
);

/*==============================================================*/
/* Table: DOI_TAC                                               */
/*==============================================================*/
create table DOI_TAC
(
   ID_DOI_TAC           int not null auto_increment,
   TEN                  varchar(70),
   LOGO                 varchar(200),
   LINK                 varchar(200),
   NGAY_TAO             datetime,
   VI_TRI               smallint,
   NGAY_CAP_NHAT        datetime,
   primary key (ID_DOI_TAC)
);

/*==============================================================*/
/* Table: DON_HANG                                              */
/*==============================================================*/
create table DON_HANG
(
   ID_DON_HANG          int not null auto_increment,
   ID_NGUOI_DUNG        int not null,
   TEN_NGUOI_NHAN       varchar(50),
   DIA_CHI_GIAO         varchar(50),
   DIEN_THOAI_NGUOI_NHAN varchar(15),
   PHUONG_THUC_THANH_TOAN varchar(50),
   NGAY_CAP_NHAT        datetime,
   NGAY_TAO             datetime,
   TONG_CONG            float,
   GIAM_GIA             float,
   PHI_VAN_CHUYEN       float,
   TONG_CONG_CUOI_CUNG  float,
   TRANG_THAI           varchar(50),
   GHI_CHU              text,
   primary key (ID_DON_HANG)
);

/*==============================================================*/
/* Table: HINH_ANH_SAN_PHAM                                     */
/*==============================================================*/
create table HINH_ANH_SAN_PHAM
(
   ID_HINH_ANH          int not null auto_increment,
   ID_SAN_PHAM          int not null,
   HINH_ANH             varchar(100),
   primary key (ID_HINH_ANH)
);

/*==============================================================*/
/* Table: HINH_ANH_SLIDE                                        */
/*==============================================================*/
create table HINH_ANH_SLIDE
(
   ID_SLIDE             int not null auto_increment,
   TEN_SLIDE            varchar(50),
   HINH_ANH             varchar(100),
   LINK                 varchar(200),
   VI_TRI               smallint,
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   NGAY_HET_HAN         datetime,
   primary key (ID_SLIDE)
);

/*==============================================================*/
/* Table: MA_GIAM_GIA                                           */
/*==============================================================*/
create table MA_GIAM_GIA
(
   ID_GIAM_GIA          int not null auto_increment,
   MA_GIAM              varchar(10),
   THE_LOAI             varchar(30),
   GIA_TRI              float,
   TRANG_THAI           varchar(50),
   NGAY_HET_HAN         datetime,
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   primary key (ID_GIAM_GIA)
);

/*==============================================================*/
/* Table: NGUOI_DUNG                                            */
/*==============================================================*/
create table NGUOI_DUNG
(
   ID_NGUOI_DUNG        int not null auto_increment,
   PHAN_QUYEN           varchar(30),
   HO_TEN               varchar(70),
   MAT_KHAU             varchar(25),
   DIA_CHI              varchar(200),
   EMAIL		varchar(30) unique,
   DIEN_THOAI           varchar(20),
   HINH_ANH		varchar(100),
   TRANG_THAI		varchar(20),
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   primary key (ID_NGUOI_DUNG)
);

/*==============================================================*/
/* Table: SAN_PHAM                                              */
/*==============================================================*/
create table SAN_PHAM
(
   ID_SAN_PHAM          int not null auto_increment,
   ID_THE_LOAI          int not null,
   MA_SAN_PHAM          varchar(20),
   TEN_SP               varchar(70),
   GIA                  float,
   TRANG_THAI_SP           varchar(50),
   KICH_THUOC           varchar(2),
   MAU_SAC              varchar(10),
   MO_TA_SP                text,
   XUAT_XU              varchar(50),
   SLUG                 varchar(100),
   MO_TA_NGAN           text,
   GIA_KHUYEN_MAI       float,
   DANH_GIA_SAO         smallint,
   DAC_SAC              bool,
   BAN_CHAY             bool,
   MOI                  bool,
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   HINH_ANH	        varchar(200),
   HINH_ANH_HAI	        varchar(200),
   primary key (ID_SAN_PHAM)
);

/*==============================================================*/
/* Table: THE_LOAI                                              */
/*==============================================================*/
create table THE_LOAI
(
   ID_THE_LOAI          int not null auto_increment,
   TEN_TL                  varchar(70),
   MO_TA_TL                text,
   HINH_ANH_TL          varchar(100),
   SLUG                 varchar(100),
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   TRANG_THAI           varchar(50),
   primary key (ID_THE_LOAI)
);

/*==============================================================*/
/* Table: TIN_TUC                                               */
/*==============================================================*/
create table TIN_TUC
(
   ID_TIN_TUC           int not null auto_increment,
   ID_THE_LOAI          int not null,
   TIEU_DE              varchar(100),
   NOI_DUNG             text,
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   TRANG_THAI           varchar(50),
   THE_LOAI             varchar(30),
   HINH_ANH		varchar(100),
   primary key (ID_TIN_TUC)
);

alter table CHI_TIET_DON_HANG add constraint FK_DON_HANG_CHI_TIET foreign key (ID_DON_HANG)
      references DON_HANG (ID_DON_HANG) on delete restrict on update restrict;

alter table CHI_TIET_DON_HANG add constraint FK_DON_HANG_SAN_PHAM foreign key (ID_SAN_PHAM)
      references SAN_PHAM (ID_SAN_PHAM) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_DANH_GIA_SAN_PHAM foreign key (ID_SAN_PHAM)
      references SAN_PHAM (ID_SAN_PHAM) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_GUI foreign key (ID_NGUOI_DUNG)
      references NGUOI_DUNG (ID_NGUOI_DUNG) on delete restrict on update restrict;

alter table DON_HANG add constraint FK_KHACH_HANG_DON_HANG foreign key (ID_NGUOI_DUNG)
      references NGUOI_DUNG (ID_NGUOI_DUNG) on delete restrict on update restrict;

alter table HINH_ANH_SAN_PHAM add constraint FK_CO_NHIEU foreign key (ID_SAN_PHAM)
      references SAN_PHAM (ID_SAN_PHAM) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_THUOC foreign key (ID_THE_LOAI)
      references THE_LOAI (ID_THE_LOAI) on delete restrict on update restrict;

alter table TIN_TUC add constraint FK_CUA foreign key (ID_THE_LOAI)
      references THE_LOAI (ID_THE_LOAI) on delete restrict on update restrict;

insert into NGUOI_DUNG(HO_TEN, EMAIL, MAT_KHAU, DIEN_THOAI, PHAN_QUYEN, TRANG_THAI, HINH_ANH) VALUES
('Hoàng Minh', 'minhquantrivien@gmail.com', 'hoangminh', '0909999999', 'quan_tri_vien', 'bi_chan', 'hoangminh.jpg'),
('Minh Anh', 'anhquantrivien@gmail.com', 'minhanh', '0909999999', 'quan_tri_vien', 'hoat_dong', 'minhanh.png'),
('Cẩm Tú', 'tuquantrivien@gmail.com', 'camtu', '0909999999', 'quan_tri_vien', 'hoat_dong', 'camtu.png'),
('Thanh Sang', 'sangquantrivien@gmail.com', 'thanhsang', '0909999999', 'quan_tri_vien', 'hoat_dong', 'thanhsang.png'),
('Quốc Thái', 'thaiquantrivien@gmail.com', 'quocthai', '0909999999', 'quan_tri_vien', 'hoat_dong', 'quocthai.png');

insert into NGUOI_DUNG(HO_TEN, EMAIL, MAT_KHAU, DIEN_THOAI, PHAN_QUYEN, TRANG_THAI, HINH_ANH) VALUES
('Hoàng Minh', 'minhnhanvien@gmail.com', 'hoangminh', '0909999999', 'nhan_vien', 'bi_chan', 'hoangminh.jpg'),
('Minh Anh', 'anhnhanvien@gmail.com', 'minhanh', '0909999999', 'nhan_vien', 'hoat_dong', 'minhanh.png'),
('Cẩm Tú', 'tunhanvien@gmail.com', 'camtu', '0909999999', 'nhan_vien', 'hoat_dong', 'camtu.png'),
('Thanh Sang', 'sangnhanvien@gmail.com', 'thanhsang', '0909999999', 'nhan_vien', 'hoat_dong', 'thanhsang.png'),
('Quốc Thái', 'thainhanvien@gmail.com', 'quocthai', '0909999999', 'nhan_vien', 'hoat_dong', 'quocthai.png');

insert into NGUOI_DUNG(HO_TEN, EMAIL, MAT_KHAU, DIEN_THOAI, PHAN_QUYEN, DIA_CHI, TRANG_THAI, HINH_ANH) VALUES
('Hoàng Minh', 'minhkhachhang@gmail.com', 'hoangminh', '0909999999', 'khach_hang', '590 CMT8 P11 Q3 TPHCM', 'bi_chan', 'hoangminh.jpg'),
('Minh Anh', 'anhkhachhang@gmail.com', 'minhanh', '0909999999', 'khach_hang', '590 CMT8 P11 Q3 TPHCM', 'hoat_dong', 'minhanh.png'),
('Cẩm Tú', 'tukhachhang@gmail.com', 'camtu', '0909999999', 'khach_hang', '590 CMT8 P11 Q3 TPHCM', 'hoat_dong', 'camtu.png'),
('Thanh Sang', 'sangkhachhang@gmail.com', 'thanhsang', '0909999999', 'khach_hang', '590 CMT8 P11 Q3 TPHCM', 'hoat_dong', 'thanhsang.png'),
('Quốc Thái', 'thaikhachhang@gmail.com', 'quocthai', '0909999999', 'khach_hang', '590 CMT8 P11 Q3 TPHCM', 'hoat_dong', 'quocthai.png');


insert into the_loai(TEN_TL, HINH_ANH_TL, MO_TA_TL, TRANG_THAI) VALUES
('FALL WINTER 2020','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân' ,'Hiển Thị'),
('FALL WINTER 2019','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg','Bộ Sưu Tập Mùa Hạ' ,'Hiển Thị'),
('PRE-FALL 2020','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg','Bộ Sưu Tập Mùa Đông' ,'Hiển Thị'),
('PRE-FALL 2019','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân' ,'Hiển Thị'),
('SPRING SUMMER 2022','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg','Bộ Sưu Tập Mùa Hạ' ,'Hiển Thị'),
('SPRING SUMMER 2020','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân' ,'Hiển Thị'),
('SPRING SUMMER 2019','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg','Bộ Sưu Tập Mùa Đông' ,'Hiển Thị'),
('RESORT 2022','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân' ,'Hiển Thị'),
('RESORT 2021','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg','Bộ Sưu Tập Mùa Hạ' ,'Hiển Thị'),
('RESORT 2020','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg','Bộ Sưu Tập Mùa Đông' ,'Hiển Thị'),
('RESORT 2019','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân' ,'Hiển Thị'),
('WEDDING 2020','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg','Bộ Sưu Tập Mùa Hạ' ,'Hiển Thị'),
('WEDDING 2019','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg','Bộ Sưu Tập Mùa Đông' ,'Hiển Thị');


insert into san_pham(ID_THE_LOAI, TEN_SP, GIA, MO_TA_SP, HINH_ANH_HAI, TRANG_THAI_SP, HINH_ANH, MOI, BAN_CHAY, DAC_SAC, MO_TA_NGAN) VALUES
(7,'Aaaaa',5000000,'Mô tả dài','z3513554982861_80e02a8c77658a238a3946c826e8b7c9.jpg','Còn Hàng','z3513554996026_52ba01e74c0312245c00b7c25401f23b.jpg', true, false, true,'Mô tả ngắn'),
(8,'bbbbb',4000000,'Mô tả dài','z3513555161937_af2b6e70a64cf1e9e8c47fb68cdd4de7.jpg','Hết Hàng','z3513555156867_42f42e1977c9c71b2980d5a8557a887b.jpg', true, true, true,'Mô tả ngắn'),
(9,'ccccc',4500000,'Mô tả dài','z3513562077620_865656edf9f4adabb2a55daf08a0f2d1.jpg','Hết Hàng','z3513562096055_fff8bd44fba7af424f5d170f5cd31816.jpg', false, false, true,'Mô tả ngắn'),
(10,'ddddd',3500000,'Mô tả dài','z3513562836833_d4cee16640fefe8e16e2c31816beacad.jpg','Còn Hàng','z3513562817998_b6db5ae5614cdcefe77337d5add37449.jpg', true, false, false,'Mô tả ngắn'),
(12,'ssss',2500000,'Mô tả dài','z3513562286411_b9f54dd1e71309ac0b876e4813b9d06b.jpg','Còn Hàng','z3513562337204_42f69e00ee46aa0e2968277d531eb4e4.jpg', false, true, true,'Mô tả ngắn'),
(11,'ffffff',1500000,'Mô tả dài','z3513562787191_773b89f2acb4d710a7c0aac08b889603.jpg','Còn Hàng','z3513562803419_32bb0ddd7eaae42c50f3a39ac381b966.jpg', true, false, true,'Mô tả ngắn'),
(13,'gggggg',7500000,'Mô tả dài','z3513562388820_5b35cb53f2155b522e3190d0c40fab0d.jpg','Hết Hàng','z3513562353760_4e6a2c343fcaf4e5d9c0ad15b9a00f87.jpg', true, true, true,'Mô tả ngắn'),
(1,'ccjjjjjccc',8500000,'Mô tả dài','z3513563017766_0f5723854bfa4e07f670eeaad9c59e03.jpg','Hết Hàng','z3513563037343_d1bbb6127c969227f3f9e36f0af055d0.jpg', false, false, true,'Mô tả ngắn'),
(2,'ddtttttddd',9500000,'Mô tả dài','z3513562886944_41f7ec7ee108d32a9be93e97848023fd.jpg','Còn Hàng','z3513562904030_f90d14c5b307e955aea5c84e42d2d218.jpg', true, false, false,'Mô tả ngắn'),
(3,'ssxxxxss',8800000,'Mô tả dài','z3513562853817_43ff326846df9295a062d8d22eec3fff.jpg','Còn Hàng','z3513562871469_c745871db8648a67615945da25cf61f0.jpg', false, true, true,'Mô tả ngắn'),
(4,'Aaaaa',7700000,'Mô tả dài','z3513562750726_9d42b7ec22ce8d9c5f608ce1c4ae88af.jpg','Còn Hàng','z3513562763812_f719808df38c8e20717b3d0fadc321c1.jpg', true, false, true,'Mô tả ngắn'),
(5,'bbbbb',5500000,'Mô tả dài','z3513562720227_e49a4d2a1ba4fde87841cc94449f72dd.jpg','Hết Hàng','z3513562726682_c67013eb1c537539a3a453963668433f.jpg', true, true, true,'Mô tả ngắn'),
(6,'ccccc',5700000,'Mô tả dài','z3513562676874_612865135c214de32f992010f491a3c6.jpg','Hết Hàng','z3513562694142_0e87f14496cc2b5f90c79ca91f39758f.jpg', false, false, true,'Mô tả ngắn'),
(7,'ddddd',5800000,'Mô tả dài','z3513562942819_7cda62e9734c85926b94dfabc3366590.jpg','Còn Hàng','z3513563002570_d20f02a05873f9566a112dde40cdcf4c.jpg', true, false, false,'Mô tả ngắn'),
(8,'ssss',5900000,'Mô tả dài','z3513562934921_fea5d973d72b0a733f773b7de962642d.jpg','Còn Hàng','z3513562976702_691ac1e3f96a05b895007485c0de0571.jpg', false, true, true,'Mô tả ngắn'),
(9,'ffffff',5600000,'Mô tả dài','z3513562592706_870a077242b501e73a933fdfea35da07.jpg','Còn Hàng','z3513562607876_9f19190e9eaad2b94fe74d539f08c500.jpg', true, false, true,'Mô tả ngắn'),
(10,'gggggg',5300000,'Mô tả dài','z3513562552340_2495ff11f8ada1edf1ecb47638be7d78.jpg','Hết Hàng','z3513562576256_8a97c2cf37cdd50108008b915dee2185.jpg', true, true, true,'Mô tả ngắn'),
(11,'ccjjjjjccc',5200000,'Mô tả dài','z3513562522991_32f58e40494b1d2a79f11856dd70f7d7.jpg','Hết Hàng','z3513562537338_9d15fa2996222506ca59900b12eb1f9d.jpg', false, false, true,'Mô tả ngắn'),
(12,'ddtttttddd',5100000,'Mô tả dài','z3513562497881_f0ffea7ac9c99a1b77b4450bb0c92ffb.jpg','Còn Hàng','z3513562518330_0a5fce90befad056a93d661eea4ca2a9.jpg', true, false, false,'Mô tả ngắn'),
(13,'ssxxxxss',7900000,'Mô tả dài','z3513562448947_d9c4278dc384d4bfdf29c909459e48c2.jpg','Còn Hàng','z3513562485581_d70bbcd0ce80c2706f49578461f3a7e0.jpg', false, true, true,'Mô tả ngắn');

insert into don_hang(ID_NGUOI_DUNG, DIA_CHI_GIAO, TEN_NGUOI_NHAN, DIEN_THOAI_NGUOI_NHAN, TRANG_THAI) VALUES
(1,'590 CMT8','Hoàng Minh','0902252888','Đang Giao'),
(2,'590 CMT8','Hoàng Minh','0902252888','Chờ Xác Nhận'),
(3,'590 CMT8','Hoàng Minh','0902252888','Đã Giao'),
(4,'590 CMT8','Hoàng Minh','0902252888','Đã Xác Nhận'),
(5,'590 CMT8','Hoàng Minh','0902252888','Đang Giao');

insert into tin_tuc(ID_THE_LOAI, TIEU_DE, NOI_DUNG) VALUES
(1,'Tiêu đề 1 ','Nội dung bài viết'),
(2,'Tiêu đề 2 ','Nội dung bài viết'),
(3,'Tiêu đề 3 ','Nội dung bài viết'),
(1,'Tiêu đề 4 ','Nội dung bài viết'),
(2,'Tiêu đề 5 ','Nội dung bài viết');

insert into hinh_anh_slide(TEN_SLIDE, HINH_ANH) VALUES
('Slide one','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg'),
('Slide two','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg'),
('Slide three','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg'),
('Slide four','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg');





UPDATE `tin_tuc` SET `TIEU_DE` = 'DECOS FW20 - BST Những Cánh Hoa.' WHERE `tin_tuc`.`ID_TIN_TUC` = 1;
UPDATE `tin_tuc` SET `NOI_DUNG` = 'Nghĩ về mùa Đông người ta không thường nghĩ đến Hoa bởi chúng không nhiều và không quá rực rỡ. Hoa của mùa Đông dường như chỉ xuất hiện khi ai đó lắng tâm hồn một chút để kiếm tìm. Chọn Hoa làm nguồn cảm hứng chủ đạo cho BST DECOS Thu Đông 2020, NTK Nguyễn Phương Đông và đội ngũ sáng tạo DECOS muốn mang đến cho các cô gái của mình một mùa đông tươi mới và khác biệt.\nKhông chọn một loài hoa cụ thể nào cho BST ”The Flowers”, nhưng có thế thấy sự hiện diện xuyên suốt của hoa trong các thiết kế Thu Đông lần này của DECOS. Từ hình dáng cách điệu của các cánh hoa trên cổ hay line áo, các đường cắt cúp mềm mại mô phỏng đường nét của những cánh hoa, đến các chi tiết hoa cỏ và cả các chú ong nho nhỏ được đính kết và thêu hoàn toàn thủ công trên thân áo.
Vẫn là hoa nhưng không rực rỡ, phô thương. “The Flowers” của DECOS mang đến cảm giác nhẹ nhàng với gam màu chủ đạo đen, kem, xanh navy, hồng pastel... Sử dụng chất liệu chính là light wool, tweed, cotton, lụa và ren nổi 3D… cùng sự kết hợp khéo léo các form dáng quen thuộc với hình dáng bông hoa cách điệu, các đường dập li cá tính, các chi tiết thêu đính thủ công tỉ mỉ, DECOS thổi một luồng gió mới vào các mẫu thiết kế của mình. Chọn các thiết kế nhẹ nhàng nữ tính cho bộ sưu tập lần này, đội ngũ sáng tạo DECOS mong muốn các cô gái trở thành một bông hoa nhẹ nhàng khoe sắc theo cách riêng của mình.'
WHERE `tin_tuc`.`ID_TIN_TUC` = 1;
UPDATE `tin_tuc` SET `HINH_ANH` = '41.jpg' WHERE `tin_tuc`.`ID_TIN_TUC` = 1;
UPDATE `tin_tuc` SET `TIEU_DE` = 'DECOS PRE-FALL 2020 - PINK GIRLS COLLECTION' WHERE `tin_tuc`.`ID_TIN_TUC` = 3;
UPDATE `tin_tuc` SET `NOI_DUNG` = 'BST Decos PreFall 2020 Pink Girls Collection\nPink Girls là sự đan xen giữa thực tại và chút mơ mộng của các cô gái thành thị. Với sắc hồng pastel chủ đạo, các thiết kế điệu đà nhưng không quá cầu kỳ với chất liệu chính của BST là: cotton 100%, thun 3D và ren cao cấp nhập khẩu. Đặc biệt lần này Decos sử Dụng chất tweet, một chất liệu vốn được yêu thích của giới thượng lưu.\nMong rằng những cô gái của DECOS sẽ trở thành nàng thơ của chính mình trong một phiên bản nữ tính và ngọt ngào hơn.' WHERE `tin_tuc`.`ID_TIN_TUC` = 3;
UPDATE `tin_tuc` SET `HINH_ANH` = '46.jpg' WHERE `tin_tuc`.`ID_TIN_TUC` = 3;
UPDATE `tin_tuc` SET `ID_THE_LOAI` = '4' WHERE `tin_tuc`.`ID_TIN_TUC` = 4;
UPDATE `tin_tuc` SET `TIEU_DE` = 'DECOS Pre-Fall 19 Collection' WHERE `tin_tuc`.`ID_TIN_TUC` = 4;
UPDATE `tin_tuc` SET `NOI_DUNG` = 'Bộ sưu tập DECOS Pre-Fall 19 mang phong cách Preppy cá tính được nữ tính hoá (ultra feminine) theo một phong cách riêng của đội ngủ thiết kế. \"Preppy\" là thuật ngữ chỉ một nét đẹp văn hoá trong phong cách sống, trang điểm và đặc biệt là thời trang của tầng lớp thượng lưu trong xã hội Mỹ những năm 60.  Thời trang Preppy vốn là đặc trưng cho các tiểu thư giới thượng lưu, mang hơi hướng cổ điển với sự tối giãn hài hoà nhưng đắt tiền ở form dáng và những đường may chuẩn mực. \nTheo chuẩn mực đó, Decos đã cho ra đời những thiết kế mang phong cách preppy có tính ứng dụng cao và thích hợp với nhiều đối tượng khách hàng, đặc biệt  là giới trẻ. Khách hàng chắc chắn sẽ bắt gặp những form dáng hoặc kiểu thiết kế ở mùa trước trong BST lần này, đó không phải là sự lặp lại mà đó là sự làm mới lại những yêu thích giúp khách hàng trãi nghiệm ở những cung bậc khác của chất liệu và chi tiết.\nMàu sắc chủ đạo của bộ sự tập vẫn là beige, trắng và đen. Lần đầu tiên màu nâu của linen và màu xanh của denim được sử dụng để tạo điểm nhấn cũng như làm đa dạng hơn bảng màu của thương hiệu. Chất liệu linen được tận dụng tối đa nhằm mang lại cảm giác thoải mái cho người mặc trong điều kiện thời tiết vùng miền đặc trưng ở VN hiện tại.\nDECOS hy vọng rằng những cô gái vốn đã yêu thích sự nữ tính của DECOS sẽ tìm thấy một phiên bản mới của chính mình trong các mẫu thiết kế mà đội ngủ chúng tôi mang lại!' WHERE `tin_tuc`.`ID_TIN_TUC` = 4;
UPDATE `tin_tuc` SET `HINH_ANH` = '51.jpg' WHERE `tin_tuc`.`ID_TIN_TUC` = 4;
UPDATE `tin_tuc` SET `ID_THE_LOAI` = '5' WHERE `tin_tuc`.`ID_TIN_TUC` = 5;
UPDATE `tin_tuc` SET `TIEU_DE` = 'DECOS SPRING SUMMER 22 COLLECTION' WHERE `tin_tuc`.`ID_TIN_TUC` = 5;
UPDATE `tin_tuc` SET `NOI_DUNG` = 'Bộ sưu tập DECOS SS22 là tập hợp những thiết kế mang phong cách đơn giản, hiện đại lấy cảm hứng từ vẻ đẹp năng động, trẻ trung của những cô gái thành thị. Với mong muốn mang đến cho những cô gái của mình nhiều lựa chọn hơn cho mùa hè, NTK NGUYỄN PHƯƠNG ĐÔNG tập trung vào những thiết kế mang tính ứng dụng cao, dễ dàng kết hợp cùng nhau để tạo ra nhiều set đồ mới mẻ và độc đáo. \nSử dụng các chất liệu chủ đạo là ren, cotton…và đặc biệt là chất liệu lụa xốp được dập sóng chìm thời thượng. Các kỹ thuật xếp pli, nhún, đan thủ công được kết hợp khéo léo trên những phom dáng đơn giản, hiện đại cùng những đường cắt may chỉn chu và tinh tế. \nMàu sắc của BST củng đựơc tiết chế một cách khéo léo. Ngoài trắng, đen quen thuộc, BST còn sử dụng xanh navy, ghi xám… những màu sắc vốn không được sử dụng nhiều trong các thiết kế xuân hè mang lại sự hài hoà, tinh tế cho các thiết kế. Các thiết kế lần này cũng gắn liền với thông điệp dành cho các cô gái DECOS: “Phụ nữ đẹp là người luôn tự tin toát ra thần thái riêng, cuốn hút người đối diện bằng phong cách thanh lịch không gắng gượng”' WHERE `tin_tuc`.`ID_TIN_TUC` = 5;
UPDATE `tin_tuc` SET `HINH_ANH` = '57.jpg' WHERE `tin_tuc`.`ID_TIN_TUC` = 5;
INSERT INTO `tin_tuc` (`ID_TIN_TUC`, `ID_THE_LOAI`, `TIEU_DE`, `NOI_DUNG`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `TRANG_THAI`, `THE_LOAI`, `HINH_ANH`) VALUES (NULL, '6', 'DECOS SPRING SUMMER 2020 CAMPAIGN', 'Có gì trên bãi biển một ngày hè? Từng đợt sóng tung bọt trắng xóa, vài chiếc vỏ sò, dăm ba mẫu san hô nằm lẩn mình trong cát. Những chi tiết nhỏ ấy chính là nguồn cảm hứng cho đội ngũ sáng tạo DECOS cho bộ sưu tập xuân hè mới nhất dành cho các quý cô của mình.\r\nHè của DECOS không chỉ có nắng vàng và biển xanh. Vẫn mang hơi thở đại dương nhưng những thiết kế của DECOS lại tập trung khai thác những khía cạnh hoàn toàn mới. Đường và nét của biển cả, tiêu biểu là rặng san hô, hình ảnh những chiếc vỏ sò và sóng biển, cũng như các đường răng cưa và gợn sóng được tận dụng triệt để. Vẫn trung thành với các thiết kế không quá cầu kỳ về kiểu dáng, DECOS để cho chất liệu trò chuyện với các thiết kế của mình. Các mẫu Ren với các họa tiết độc đáo được kết hợp khéo léo với những chất liệu thô mộc như linen, bố…Những chất liệu tưởng chừng như đối lập lại tạo thành những tổng thể vô cùng hài hoà.\r\nKhông quá rực rỡ, màu sắc chủ đạo trong mùa hè của DECOS là beige, sandy white, navy blue… Bởi DECOS muốn mang đến cho các cô gái của mình một mùa hè khác biệt.', NULL, NULL, NULL, NULL, '61.jpg');
INSERT INTO `tin_tuc` (`ID_TIN_TUC`, `ID_THE_LOAI`, `TIEU_DE`, `NOI_DUNG`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `TRANG_THAI`, `THE_LOAI`, `HINH_ANH`) VALUES (NULL, '7', 'DECOS shooting for Spring Summer 19 Collection', 'Bộ sưu tập mới nhất từ DECOS là tập hợp những thiết kế mang phong cách đơn giản, hiện đại dành cho phái đẹp thành thị. \r\nLấy cảm hứng từ chiếc áo khoác trench coat lừng danh với các chi tiết kinh điển như 2 hàng nút, túi cargo, chất liệu kaki và màu beige trang nhã, DECOS đã chuyển hoá chúng vào những kiểu đầm và chân váy duyên dáng, thanh lịch nhưng không kém phần sáng tạo.\r\nMàu sắc chủ đạo của cả bộ sưu tập là beige, trắng và đen, điểm xuyết một số thiết kế đặc biệt màu xanh thạch anh và hồng cam thời thượng. Chất liệu lụa và kaki tưởng chừng đối lập nhau nhưng lại được xử lý rất hài hoà, xen kẽ với ren và linen. \r\nKỹ thuật xếp pli rẽ quạt và draping vải tạo những điểm nhấn ở eo, chân váy cũng được vận dụng hợp lý, mang đến cho phái đẹp nhiều lựa chọn phong phú, có thể tự tin toả sáng trong những dịp khác nhau như đi làm, dạo phố và cả tiệc tối. \r\nVới kiểu dáng đơn giản, hiện đại, đường cắt may chỉn chu, tinh tế, chất liệu và màu sắc đều có sự tiết chế và kết hợp hài hoà, người phụ nữ của DECOS luôn tự tin toát ra thần thái riêng, cuốn hút người đối diện bằng vẻ đẹp thuần khiết và phong cách thanh lịch không gắng gượng!', NULL, NULL, NULL, NULL, '71,jpg');
INSERT INTO `tin_tuc` (`ID_TIN_TUC`, `ID_THE_LOAI`, `TIEU_DE`, `NOI_DUNG`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `TRANG_THAI`, `THE_LOAI`, `HINH_ANH`) VALUES (NULL, '9', 'DECOS RESORT21 COLLECTION LOOKBOOK', 'Xuất phát từ mong muốn mang đến cho các cô gái những mẫu thiết kế đơn giản và gần gũi nhất cho tủ đồ của mình trong nhiều dịp khác nhau, “Back to basic”- BST Resort 2021 là một câu chuyện không mới nhưng được kể với ngôn ngữ riêng đậm chất DECOS trong thế giới thời trang vốn nhanh thay đổi. \r\nĐơn giản về màu sắc với tone chủ đạo là trắng và đen. Thanh lịch nhưng mạnh mẽ, sắc thái trắng đen luôn mang lại cảm giác thoải mái và tự tin cho người mặc ở bất cứ độ tuổi, hoàn cảnh hay thời điểm nào.\r\nXuyên suốt BST là các mẫu thiết kế với form dáng hoàn toàn quen thuộc nhưng khác biệt với các đường cut-out cá tính cùng kỹ thuật xử lý chất liệu độc đáo vốn là thế mạnh của DECOS như: đắp ren, dập ly đều hay xếp ly thủ công… Các chất liệu được chọn lọc và xử lý kỹ càng như lưới, oganza, đũi, chiffon… ngay cả bố chất liệu tưởng chừng không thích hợp cho trang phục hè cũng được sử dụng một cách khéo léo. Không thể không kể đến những chi tiết thêu, đột chỉ thủ công, hay những chiếc nơ nữ tính với nhiều kiểu dáng khác nhau được lựa chọn để đưa vào BST.\r\n“Back to basic\" là tổng hòa của sự đơn giản, thanh lịch đúng với tinh thần đẹp không cần cố gắng mà DECOS đang hướng đến.', NULL, NULL, NULL, NULL, '91.jpg');
INSERT INTO `tin_tuc` (`ID_TIN_TUC`, `ID_THE_LOAI`, `TIEU_DE`, `NOI_DUNG`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `TRANG_THAI`, `THE_LOAI`, `HINH_ANH`) VALUES (NULL, '10', 'Decos Resort20 Limited Collection ', 'Khi nhắc đến phái đẹp, lẽ thường người ta sẽ nghĩ đến sự dịu dàng và quyến rũ. Và để tôn vinh đặc quyền ấy, đội ngũ thiết kế của DECOS đã tìm tòi và cho ra đời bộ sưu tập Resort 2020. \r\nVới chất liệu chủ đạo là voan, lụa, lưới và ren, những chất liệu vốn dành riêng cho phái đẹp, DECOS mong muốn đem đến cho các cô gái nguồn cảm hứng sáng tạo của mình, một chút quyến rũ nhưng không kém phần thanh lịch.', NULL, NULL, NULL, NULL, '101.jpg');
INSERT INTO `tin_tuc` (`ID_TIN_TUC`, `ID_THE_LOAI`, `TIEU_DE`, `NOI_DUNG`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `TRANG_THAI`, `THE_LOAI`, `HINH_ANH`) VALUES (NULL, '12', 'DECOS BRIDAL FALL 2020-ELLE WEDDING ART GALLERY 2020', 'Lấy cảm hứng từ sự tối giản và thanh lịch trong những chiếc váy cưới của quý cô nước Pháp. BST là câu chuyện kể về những cô gái hiện đại và phóng khoáng, không gò ép mình vào những mẫu váy cưới mang tính khuôn mẫu.\r\nCác mẫu váy nhẹ nhàng thanh lịch với chất liệu chính là ren, lụa, voan lưới và đặc biệt là tweed, một chất liệu còn khá mới mẻ với trang phục cưới… BST là sự kết hợp các chi tiết đơn giản được xử lý khéo léo bằng những nếp gấp, đường dập li tinh tế, cùng với các họa tiết được xử lý hoàn toàn thủ công với pha lê, cườm và lông vũ...\r\nĐược trình diễn ra mắt vào 20:30 ngày 4/10/2020 trong khuôn khổ Elle Wedding Art Gallery tại White Palace Hoàng Văn Thụ, Tp HCM, hy vọng các cô gái sẽ chọn được trang phục cưới phù hợp nhất cho ngày trọng đại và hạnh phúc nhất của mình!', NULL, NULL, NULL, NULL, '121.jpg');
