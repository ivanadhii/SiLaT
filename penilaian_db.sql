PGDMP  *    3                }            penilaian_db    16.8    16.8 /               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16927    penilaian_db    DATABASE     r   CREATE DATABASE penilaian_db WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en-US';
    DROP DATABASE penilaian_db;
                postgres    false            �            1259    16996    data    TABLE     �  CREATE TABLE public.data (
    id integer NOT NULL,
    unit_kerja character varying(255),
    sub_unit_kerja text,
    tanggal_submit date,
    standar_data text,
    standar_data_justifikasi text,
    basis_data text,
    basis_data_justifikasi text,
    aplikasi_informasi text,
    aplikasi_informasi_justifikasi text,
    publikasi_data_nilai integer,
    publikasi_data_justifikasi text,
    integrasi_data_nilai integer,
    integrasi_data_justifikasi text
);
    DROP TABLE public.data;
       public         heap    postgres    false            �            1259    16995    data_id_seq    SEQUENCE     �   CREATE SEQUENCE public.data_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.data_id_seq;
       public          postgres    false    226                       0    0    data_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.data_id_seq OWNED BY public.data.id;
          public          postgres    false    225            �            1259    16987 
   organisasi    TABLE     �  CREATE TABLE public.organisasi (
    id integer NOT NULL,
    unit_kerja character varying(255),
    sub_unit_kerja text,
    tanggal_submit date,
    dokumen_rencana_spbe text,
    dokumen_rencana_spbe_justifikasi text,
    dokumen_kebijakan_spbe text,
    dokumen_kebijakan_spbe_justifikasi text,
    dokumen_sop_spbe text,
    dokumen_sop_spbe_justifikasi text,
    anggaran_sdm_spbe text,
    anggaran_sdm_spbe_justifikasi text,
    sdm_khusus_spbe text,
    sdm_khusus_spbe_justifikasi text,
    anggaran_dialokasikan text,
    anggaran_dialokasikan_justifikasi text,
    anggaran_penambahan text,
    anggaran_penambahan_justifikasi text,
    anggaran_pengurangan text,
    anggaran_pengurangan_justifikasi text
);
    DROP TABLE public.organisasi;
       public         heap    postgres    false            �            1259    16986    organisasi_id_seq    SEQUENCE     �   CREATE SEQUENCE public.organisasi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.organisasi_id_seq;
       public          postgres    false    224                       0    0    organisasi_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.organisasi_id_seq OWNED BY public.organisasi.id;
          public          postgres    false    223            �            1259    16938 	   penilaian    TABLE     (  CREATE TABLE public.penilaian (
    id integer NOT NULL,
    user_id integer,
    indikator_email_pupr character varying(10),
    indikator_tnde character varying(10),
    indikator_bravo character varying(10),
    file_bukti character varying(255),
    created_at timestamp without time zone
);
    DROP TABLE public.penilaian;
       public         heap    postgres    false            �            1259    16937    penilaian_id_seq    SEQUENCE     �   CREATE SEQUENCE public.penilaian_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.penilaian_id_seq;
       public          postgres    false    218                       0    0    penilaian_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.penilaian_id_seq OWNED BY public.penilaian.id;
          public          postgres    false    217            �            1259    16978 	   teknologi    TABLE     �  CREATE TABLE public.teknologi (
    id integer NOT NULL,
    unit_kerja character varying(255),
    sub_unit_kerja text,
    tanggal_submit date,
    bandwidth_sistem text,
    bandwidth_justifikasi text,
    topologi_jaringan text,
    topologi_justifikasi text,
    jadwal_backup text,
    backup_justifikasi text,
    manajemen_akses text,
    akses_justifikasi text,
    insiden_pencatatan text,
    insiden_pencatatan_justifikasi text,
    insiden_tindaklanjut text,
    insiden_tindaklanjut_justifikasi text,
    aset_tik_nilai integer,
    aset_tik_justifikasi text,
    inovasi_nilai integer,
    inovasi_justifikasi text,
    va_penetration_testing text,
    va_testing_justifikasi text,
    va_tindaklanjut text,
    va_tindaklanjut_justifikasi text,
    panduan_keamanan text,
    panduan_keamanan_justifikasi text,
    manajemen_insiden_siber text,
    manajemen_insiden_justifikasi text
);
    DROP TABLE public.teknologi;
       public         heap    postgres    false            �            1259    16977    teknologi_id_seq    SEQUENCE     �   CREATE SEQUENCE public.teknologi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.teknologi_id_seq;
       public          postgres    false    222                        0    0    teknologi_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.teknologi_id_seq OWNED BY public.teknologi.id;
          public          postgres    false    221            �            1259    16960 
   unit_kerja    TABLE     �   CREATE TABLE public.unit_kerja (
    id integer NOT NULL,
    unit_kerja character varying(255) NOT NULL,
    sub_unit_kerja text NOT NULL
);
    DROP TABLE public.unit_kerja;
       public         heap    postgres    false            �            1259    16959    unit_kerja_id_seq    SEQUENCE     �   CREATE SEQUENCE public.unit_kerja_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.unit_kerja_id_seq;
       public          postgres    false    220            !           0    0    unit_kerja_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.unit_kerja_id_seq OWNED BY public.unit_kerja.id;
          public          postgres    false    219            �            1259    16929    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    unit_kerja character varying(255),
    username character varying(50),
    password character varying(255),
    role character varying(20)
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16928    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    216            "           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    215            n           2604    16999    data id    DEFAULT     b   ALTER TABLE ONLY public.data ALTER COLUMN id SET DEFAULT nextval('public.data_id_seq'::regclass);
 6   ALTER TABLE public.data ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    226    226            m           2604    16990    organisasi id    DEFAULT     n   ALTER TABLE ONLY public.organisasi ALTER COLUMN id SET DEFAULT nextval('public.organisasi_id_seq'::regclass);
 <   ALTER TABLE public.organisasi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            j           2604    16941    penilaian id    DEFAULT     l   ALTER TABLE ONLY public.penilaian ALTER COLUMN id SET DEFAULT nextval('public.penilaian_id_seq'::regclass);
 ;   ALTER TABLE public.penilaian ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            l           2604    16981    teknologi id    DEFAULT     l   ALTER TABLE ONLY public.teknologi ALTER COLUMN id SET DEFAULT nextval('public.teknologi_id_seq'::regclass);
 ;   ALTER TABLE public.teknologi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    222    222            k           2604    16963    unit_kerja id    DEFAULT     n   ALTER TABLE ONLY public.unit_kerja ALTER COLUMN id SET DEFAULT nextval('public.unit_kerja_id_seq'::regclass);
 <   ALTER TABLE public.unit_kerja ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    220    220            i           2604    16932    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216                      0    16996    data 
   TABLE DATA           2  COPY public.data (id, unit_kerja, sub_unit_kerja, tanggal_submit, standar_data, standar_data_justifikasi, basis_data, basis_data_justifikasi, aplikasi_informasi, aplikasi_informasi_justifikasi, publikasi_data_nilai, publikasi_data_justifikasi, integrasi_data_nilai, integrasi_data_justifikasi) FROM stdin;
    public          postgres    false    226   <=                 0    16987 
   organisasi 
   TABLE DATA              COPY public.organisasi (id, unit_kerja, sub_unit_kerja, tanggal_submit, dokumen_rencana_spbe, dokumen_rencana_spbe_justifikasi, dokumen_kebijakan_spbe, dokumen_kebijakan_spbe_justifikasi, dokumen_sop_spbe, dokumen_sop_spbe_justifikasi, anggaran_sdm_spbe, anggaran_sdm_spbe_justifikasi, sdm_khusus_spbe, sdm_khusus_spbe_justifikasi, anggaran_dialokasikan, anggaran_dialokasikan_justifikasi, anggaran_penambahan, anggaran_penambahan_justifikasi, anggaran_pengurangan, anggaran_pengurangan_justifikasi) FROM stdin;
    public          postgres    false    224   Y=                 0    16938 	   penilaian 
   TABLE DATA              COPY public.penilaian (id, user_id, indikator_email_pupr, indikator_tnde, indikator_bravo, file_bukti, created_at) FROM stdin;
    public          postgres    false    218   v=                 0    16978 	   teknologi 
   TABLE DATA           h  COPY public.teknologi (id, unit_kerja, sub_unit_kerja, tanggal_submit, bandwidth_sistem, bandwidth_justifikasi, topologi_jaringan, topologi_justifikasi, jadwal_backup, backup_justifikasi, manajemen_akses, akses_justifikasi, insiden_pencatatan, insiden_pencatatan_justifikasi, insiden_tindaklanjut, insiden_tindaklanjut_justifikasi, aset_tik_nilai, aset_tik_justifikasi, inovasi_nilai, inovasi_justifikasi, va_penetration_testing, va_testing_justifikasi, va_tindaklanjut, va_tindaklanjut_justifikasi, panduan_keamanan, panduan_keamanan_justifikasi, manajemen_insiden_siber, manajemen_insiden_justifikasi) FROM stdin;
    public          postgres    false    222   �=                 0    16960 
   unit_kerja 
   TABLE DATA           D   COPY public.unit_kerja (id, unit_kerja, sub_unit_kerja) FROM stdin;
    public          postgres    false    220   �=                 0    16929    users 
   TABLE DATA           I   COPY public.users (id, unit_kerja, username, password, role) FROM stdin;
    public          postgres    false    216   �>       #           0    0    data_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.data_id_seq', 1, false);
          public          postgres    false    225            $           0    0    organisasi_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.organisasi_id_seq', 1, false);
          public          postgres    false    223            %           0    0    penilaian_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.penilaian_id_seq', 1, false);
          public          postgres    false    217            &           0    0    teknologi_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.teknologi_id_seq', 1, false);
          public          postgres    false    221            '           0    0    unit_kerja_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.unit_kerja_id_seq', 6, true);
          public          postgres    false    219            (           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    215            z           2606    17003    data data_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.data
    ADD CONSTRAINT data_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.data DROP CONSTRAINT data_pkey;
       public            postgres    false    226            x           2606    16994    organisasi organisasi_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.organisasi
    ADD CONSTRAINT organisasi_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.organisasi DROP CONSTRAINT organisasi_pkey;
       public            postgres    false    224            r           2606    16943    penilaian penilaian_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.penilaian
    ADD CONSTRAINT penilaian_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.penilaian DROP CONSTRAINT penilaian_pkey;
       public            postgres    false    218            v           2606    16985    teknologi teknologi_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.teknologi
    ADD CONSTRAINT teknologi_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.teknologi DROP CONSTRAINT teknologi_pkey;
       public            postgres    false    222            t           2606    16967    unit_kerja unit_kerja_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.unit_kerja
    ADD CONSTRAINT unit_kerja_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.unit_kerja DROP CONSTRAINT unit_kerja_pkey;
       public            postgres    false    220            p           2606    16936    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    216            {           2606    16944     penilaian penilaian_user_id_fkey    FK CONSTRAINT        ALTER TABLE ONLY public.penilaian
    ADD CONSTRAINT penilaian_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);
 J   ALTER TABLE ONLY public.penilaian DROP CONSTRAINT penilaian_user_id_fkey;
       public          postgres    false    216    4720    218                  x������ � �            x������ � �            x������ � �            x������ � �         �   x���AjAE�ӧ���D=�0�1�cp��m{�����\�$��j�{��Tu׮���r�zd���Pǲ縅��h�S�������8��^olW�Q��;�G��G,�nv-{-ΆߝԺ7����I}�[Vj���$7��?,Za`�pӪ��!��s�+����Or���c��b���#=�F���=��������9w&���            x������ � �     