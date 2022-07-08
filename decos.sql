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
   TEN                  varchar(70),
   GIA                  float,
   TRANG_THAI           smallint,
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
   NGAY_TAO             datetime,
   NGAY_CAP_NHAT        datetime,
   HINH_ANH	        varchar(200),
   primary key (ID_SAN_PHAM)
);

/*==============================================================*/
/* Table: THE_LOAI                                              */
/*==============================================================*/
create table THE_LOAI
(
   ID_THE_LOAI          int not null auto_increment,
   TEN                  varchar(70),
   MO_TA                text,
   HINH_ANH             varchar(100),
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


insert into the_loai(TEN, HINH_ANH, MO_TA) VALUES
('Mùa Xuân','z3513568000557_1b666463358e51c8eaef51a696314ff0.jpg','Bộ Sưu Tập Mùa Xuân'),
('Mùa Hạ','z3513568016587_7fe3393e3aa955677e14d245ba4ba91e.jpg','Bộ Sưu Tập Mùa Hạ'),
('Mùa Đông','z3513568027356_1d86134e5959933ed35eb599fc3882ad.jpg','Bộ Sưu Tập Mùa Đông');


insert into san_pham(ID_THE_LOAI, TEN, GIA, MO_TA, TRANG_THAI, HINH_ANH) VALUES
(1,'Aaaaa',1234,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Còn Hàng','fawe8fweg8f78w7egf.jpg'),
(3,'bbbbb',1234,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Hết Hàng','fawe8fweg8f78w7egf.jpg'),
(1,'ccccc',1234,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Hết Hàng','fawe8fweg8f78w7egf.jpg'),
(2,'ddddd',1234,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Còn Hàng','fawe8fweg8f78w7egf.jpg'),
(3,'ssss',1234,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Còn Hàng','fawe8fweg8f78w7egf.jpg');


insert into don_hang(ID_NGUOI_DUNG, DIA_CHI_GIAO, TEN_NGUOI_NHAN, DIEN_THOAI_NGUOI_NHAN, TRANG_THAI) VALUES
(1,'590 CMT8','Hoàng Minh','123412341234','Đang Giao'),
(2,'590 CMT8','Hoàng Minh','123412341234','Chờ Xác Nhận'),
(3,'590 CMT8','Hoàng Minh','123412341234','Đã Giao'),
(4,'590 CMT8','Hoàng Minh','123412341234','Đã Xác Nhận'),
(5,'590 CMT8','Hoàng Minh','123412341234','Đang Giao');

insert into tin_tuc(ID_THE_LOAI, TIEU_DE, NOI_DUNG) VALUES
(1,'Tiêu đề 1 ','Nội dung bài viết'),
(2,'Tiêu đề 2 ','Nội dung bài viết'),
(3,'Tiêu đề 3 ','Nội dung bài viết'),
(1,'Tiêu đề 4 ','Nội dung bài viết'),
(2,'Tiêu đề 5 ','Nội dung bài viết');


insert into hinh_anh_slide(HINH_ANH) VALUES
('fawe8fweg8f78w7egf.jpg'),
('fawe8fweg8f78w7egf.jpg'),
('fawe8fweg8f78w7egf.jpg'),
('fawe8fweg8f78w7egf.jpg'),
('fawe8fweg8f78w7egf.jpg');



















