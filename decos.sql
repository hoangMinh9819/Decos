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
   MO_TA                text,
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
   MO_TA                text,
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


insert into the_loai(TEN_TL, HINH_ANH_TL, MO_TA, TRANG_THAI) VALUES
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


insert into san_pham(ID_THE_LOAI, TEN_SP, GIA, MO_TA, HINH_ANH_HAI, TRANG_THAI_SP, HINH_ANH, MOI, BAN_CHAY, DAC_SAC, MO_TA_NGAN) VALUES
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


insert into hinh_anh_slide(HINH_ANH) VALUES
('z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg'),
('z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg'),
('z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg');



















