--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
-- Dumped by pg_dump version 12.1

-- Started on 2020-04-23 23:31:21

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 240 (class 1259 OID 27081)
-- Name: Catalogo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Catalogo" (
    id_catalogo bigint NOT NULL,
    id_empresa bigint NOT NULL,
    id_fragancia bigint NOT NULL,
    id_fragancia2 bigint NOT NULL,
    ipc bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Catalogo" OWNER TO postgres;

--
-- TOC entry 239 (class 1259 OID 27079)
-- Name: Catalogo_id_catalogo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Catalogo_id_catalogo_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Catalogo_id_catalogo_seq" OWNER TO postgres;

--
-- TOC entry 3084 (class 0 OID 0)
-- Dependencies: 239
-- Name: Catalogo_id_catalogo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Catalogo_id_catalogo_seq" OWNED BY public."Catalogo".id_catalogo;


--
-- TOC entry 228 (class 1259 OID 27022)
-- Name: Ciudad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Ciudad" (
    id_ciudad bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    id_pais bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Ciudad" OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 27020)
-- Name: Ciudad_id_ciudad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Ciudad_id_ciudad_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Ciudad_id_ciudad_seq" OWNER TO postgres;

--
-- TOC entry 3085 (class 0 OID 0)
-- Dependencies: 227
-- Name: Ciudad_id_ciudad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Ciudad_id_ciudad_seq" OWNED BY public."Ciudad".id_ciudad;


--
-- TOC entry 238 (class 1259 OID 27070)
-- Name: Contrato; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Contrato" (
    nro_contrato bigint NOT NULL,
    fecha_firma date NOT NULL,
    condiciones_pago character varying(255) NOT NULL,
    condiciones_envio character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Contrato" OWNER TO postgres;

--
-- TOC entry 237 (class 1259 OID 27068)
-- Name: Contrato_nro_contrato_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Contrato_nro_contrato_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Contrato_nro_contrato_seq" OWNER TO postgres;

--
-- TOC entry 3086 (class 0 OID 0)
-- Dependencies: 237
-- Name: Contrato_nro_contrato_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Contrato_nro_contrato_seq" OWNED BY public."Contrato".nro_contrato;


--
-- TOC entry 236 (class 1259 OID 27062)
-- Name: Detalle_Contrato; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Detalle_Contrato" (
    fecha_inicial bigint NOT NULL,
    fecha_final date NOT NULL,
    status character varying(255) NOT NULL,
    exclusividad boolean NOT NULL,
    id_proveedor bigint NOT NULL,
    id_productor bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Detalle_Contrato" OWNER TO postgres;

--
-- TOC entry 235 (class 1259 OID 27060)
-- Name: Detalle_Contrato_fecha_inicial_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Detalle_Contrato_fecha_inicial_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Detalle_Contrato_fecha_inicial_seq" OWNER TO postgres;

--
-- TOC entry 3087 (class 0 OID 0)
-- Dependencies: 235
-- Name: Detalle_Contrato_fecha_inicial_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Detalle_Contrato_fecha_inicial_seq" OWNED BY public."Detalle_Contrato".fecha_inicial;


--
-- TOC entry 241 (class 1259 OID 27087)
-- Name: Detalle_Pedido; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Detalle_Pedido" (
    cantidad integer NOT NULL,
    monto_unidad double precision NOT NULL,
    nro_pedido bigint NOT NULL,
    id_detalle_contrato bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Detalle_Pedido" OWNER TO postgres;

--
-- TOC entry 232 (class 1259 OID 27038)
-- Name: Empresa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Empresa" (
    id_empresa bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    abrev character(10) NOT NULL,
    url character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    tipo_organizacion character varying(255) NOT NULL,
    id_tipo_empresa bigint NOT NULL,
    id_ciudad bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Empresa" OWNER TO postgres;

--
-- TOC entry 231 (class 1259 OID 27036)
-- Name: Empresa_id_empresa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Empresa_id_empresa_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Empresa_id_empresa_seq" OWNER TO postgres;

--
-- TOC entry 3088 (class 0 OID 0)
-- Dependencies: 231
-- Name: Empresa_id_empresa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Empresa_id_empresa_seq" OWNED BY public."Empresa".id_empresa;


--
-- TOC entry 210 (class 1259 OID 26933)
-- Name: Example; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Example" (
    pk bigint NOT NULL,
    name character varying(255) NOT NULL,
    lastname character varying(255) NOT NULL,
    fecha_nacimiento integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Example" OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 26931)
-- Name: Example_pk_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Example_pk_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Example_pk_seq" OWNER TO postgres;

--
-- TOC entry 3089 (class 0 OID 0)
-- Dependencies: 209
-- Name: Example_pk_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Example_pk_seq" OWNED BY public."Example".pk;


--
-- TOC entry 247 (class 1259 OID 27114)
-- Name: Factura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Factura" (
    id_factura bigint NOT NULL,
    sub_total double precision NOT NULL,
    total double precision NOT NULL,
    fecha_emision date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Factura" OWNER TO postgres;

--
-- TOC entry 246 (class 1259 OID 27112)
-- Name: Factura_id_factura_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Factura_id_factura_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Factura_id_factura_seq" OWNER TO postgres;

--
-- TOC entry 3090 (class 0 OID 0)
-- Dependencies: 246
-- Name: Factura_id_factura_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Factura_id_factura_seq" OWNED BY public."Factura".id_factura;


--
-- TOC entry 216 (class 1259 OID 26967)
-- Name: Familia_Aromatica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Familia_Aromatica" (
    id_fam bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Familia_Aromatica" OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 26965)
-- Name: Familia_Aromatica_id_fam_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Familia_Aromatica_id_fam_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Familia_Aromatica_id_fam_seq" OWNER TO postgres;

--
-- TOC entry 3091 (class 0 OID 0)
-- Dependencies: 215
-- Name: Familia_Aromatica_id_fam_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Familia_Aromatica_id_fam_seq" OWNED BY public."Familia_Aromatica".id_fam;


--
-- TOC entry 219 (class 1259 OID 26981)
-- Name: Fragancia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Fragancia" (
    cod_fragancia bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    genero character varying(255) NOT NULL,
    min_edad integer NOT NULL,
    max_edad integer NOT NULL,
    id_cod_fragancia bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Fragancia" OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 26976)
-- Name: Fragancia_Ingrediente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Fragancia_Ingrediente" (
    id_ipc bigint NOT NULL,
    id_cod_fragancia bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Fragancia_Ingrediente" OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 26990)
-- Name: Fragancia_Presentacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Fragancia_Presentacion" (
    volumen integer NOT NULL,
    precio double precision NOT NULL,
    id_fragancia bigint NOT NULL,
    id_fragancia2 bigint NOT NULL,
    ipc bigint NOT NULL,
    cod_fragancia bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Fragancia_Presentacion" OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 26979)
-- Name: Fragancia_cod_fragancia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Fragancia_cod_fragancia_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Fragancia_cod_fragancia_seq" OWNER TO postgres;

--
-- TOC entry 3092 (class 0 OID 0)
-- Dependencies: 218
-- Name: Fragancia_cod_fragancia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Fragancia_cod_fragancia_seq" OWNED BY public."Fragancia".cod_fragancia;


--
-- TOC entry 214 (class 1259 OID 26955)
-- Name: Ingrediente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Ingrediente" (
    ipc bigint NOT NULL,
    nombre_aceite character varying(255) NOT NULL,
    descripcion_aceite character varying(255) NOT NULL,
    tipo_aceite character varying(255) NOT NULL,
    descripcion_disolvente character varying(255) NOT NULL,
    precio double precision NOT NULL,
    descripcion_visual character varying(255) NOT NULL,
    proceso character varying(255) NOT NULL,
    imagen character varying(255) NOT NULL,
    prohibido boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Ingrediente" OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 26953)
-- Name: Ingrediente_ipc_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Ingrediente_ipc_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Ingrediente_ipc_seq" OWNER TO postgres;

--
-- TOC entry 3093 (class 0 OID 0)
-- Dependencies: 213
-- Name: Ingrediente_ipc_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Ingrediente_ipc_seq" OWNED BY public."Ingrediente".ipc;


--
-- TOC entry 245 (class 1259 OID 27103)
-- Name: Metodo_Pago; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Metodo_Pago" (
    id_pago bigint NOT NULL,
    tipo_pago character varying(255) NOT NULL,
    detalle character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Metodo_Pago" OWNER TO postgres;

--
-- TOC entry 244 (class 1259 OID 27101)
-- Name: Metodo_Pago_id_pago_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Metodo_Pago_id_pago_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Metodo_Pago_id_pago_seq" OWNER TO postgres;

--
-- TOC entry 3094 (class 0 OID 0)
-- Dependencies: 244
-- Name: Metodo_Pago_id_pago_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Metodo_Pago_id_pago_seq" OWNED BY public."Metodo_Pago".id_pago;


--
-- TOC entry 226 (class 1259 OID 27014)
-- Name: Pais; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Pais" (
    id_pais bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    id_region bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Pais" OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 27012)
-- Name: Pais_id_pais_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Pais_id_pais_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Pais_id_pais_seq" OWNER TO postgres;

--
-- TOC entry 3095 (class 0 OID 0)
-- Dependencies: 225
-- Name: Pais_id_pais_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Pais_id_pais_seq" OWNED BY public."Pais".id_pais;


--
-- TOC entry 243 (class 1259 OID 27092)
-- Name: Pedido; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Pedido" (
    nro_pedido bigint NOT NULL,
    fecha_envio date NOT NULL,
    fecha_recibo date NOT NULL,
    metodo_envio character varying(255) NOT NULL,
    direccion_envio character varying(255) NOT NULL,
    id_detalle_contrato bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Pedido" OWNER TO postgres;

--
-- TOC entry 242 (class 1259 OID 27090)
-- Name: Pedido_nro_pedido_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Pedido_nro_pedido_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Pedido_nro_pedido_seq" OWNER TO postgres;

--
-- TOC entry 3096 (class 0 OID 0)
-- Dependencies: 242
-- Name: Pedido_nro_pedido_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Pedido_nro_pedido_seq" OWNED BY public."Pedido".nro_pedido;


--
-- TOC entry 222 (class 1259 OID 26995)
-- Name: Perfumista; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Perfumista" (
    pasaporte bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    nombre_2 character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    apelldio_2 character varying(255) NOT NULL,
    id_pais bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Perfumista" OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 26993)
-- Name: Perfumista_pasaporte_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Perfumista_pasaporte_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Perfumista_pasaporte_seq" OWNER TO postgres;

--
-- TOC entry 3097 (class 0 OID 0)
-- Dependencies: 221
-- Name: Perfumista_pasaporte_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Perfumista_pasaporte_seq" OWNED BY public."Perfumista".pasaporte;


--
-- TOC entry 224 (class 1259 OID 27006)
-- Name: Region; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Region" (
    id_region bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Region" OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 27004)
-- Name: Region_id_region_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Region_id_region_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Region_id_region_seq" OWNER TO postgres;

--
-- TOC entry 3098 (class 0 OID 0)
-- Dependencies: 223
-- Name: Region_id_region_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Region_id_region_seq" OWNED BY public."Region".id_region;


--
-- TOC entry 230 (class 1259 OID 27030)
-- Name: Telefono; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Telefono" (
    cod_pais bigint NOT NULL,
    cod_area integer NOT NULL,
    num_telefono integer NOT NULL,
    id_empresa bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Telefono" OWNER TO postgres;

--
-- TOC entry 229 (class 1259 OID 27028)
-- Name: Telefono_cod_pais_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Telefono_cod_pais_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Telefono_cod_pais_seq" OWNER TO postgres;

--
-- TOC entry 3099 (class 0 OID 0)
-- Dependencies: 229
-- Name: Telefono_cod_pais_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Telefono_cod_pais_seq" OWNED BY public."Telefono".cod_pais;


--
-- TOC entry 234 (class 1259 OID 27051)
-- Name: Tipo_Empresa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Tipo_Empresa" (
    id_tipo_empresa bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Tipo_Empresa" OWNER TO postgres;

--
-- TOC entry 233 (class 1259 OID 27049)
-- Name: Tipo_Empresa_id_tipo_empresa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Tipo_Empresa_id_tipo_empresa_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Tipo_Empresa_id_tipo_empresa_seq" OWNER TO postgres;

--
-- TOC entry 3100 (class 0 OID 0)
-- Dependencies: 233
-- Name: Tipo_Empresa_id_tipo_empresa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Tipo_Empresa_id_tipo_empresa_seq" OWNED BY public."Tipo_Empresa".id_tipo_empresa;


--
-- TOC entry 212 (class 1259 OID 26944)
-- Name: Tipo_Fragancia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Tipo_Fragancia" (
    id_t_f bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    abrev character(4) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public."Tipo_Fragancia" OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 26942)
-- Name: Tipo_Fragancia_id_t_f_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Tipo_Fragancia_id_t_f_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Tipo_Fragancia_id_t_f_seq" OWNER TO postgres;

--
-- TOC entry 3101 (class 0 OID 0)
-- Dependencies: 211
-- Name: Tipo_Fragancia_id_t_f_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Tipo_Fragancia_id_t_f_seq" OWNED BY public."Tipo_Fragancia".id_t_f;


--
-- TOC entry 208 (class 1259 OID 26921)
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 26919)
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- TOC entry 3102 (class 0 OID 0)
-- Dependencies: 207
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 203 (class 1259 OID 26893)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 26891)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- TOC entry 3103 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 206 (class 1259 OID 26912)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 26901)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 26899)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3104 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 2856 (class 2604 OID 27084)
-- Name: Catalogo id_catalogo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Catalogo" ALTER COLUMN id_catalogo SET DEFAULT nextval('public."Catalogo_id_catalogo_seq"'::regclass);


--
-- TOC entry 2850 (class 2604 OID 27025)
-- Name: Ciudad id_ciudad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Ciudad" ALTER COLUMN id_ciudad SET DEFAULT nextval('public."Ciudad_id_ciudad_seq"'::regclass);


--
-- TOC entry 2855 (class 2604 OID 27073)
-- Name: Contrato nro_contrato; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Contrato" ALTER COLUMN nro_contrato SET DEFAULT nextval('public."Contrato_nro_contrato_seq"'::regclass);


--
-- TOC entry 2854 (class 2604 OID 27065)
-- Name: Detalle_Contrato fecha_inicial; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Detalle_Contrato" ALTER COLUMN fecha_inicial SET DEFAULT nextval('public."Detalle_Contrato_fecha_inicial_seq"'::regclass);


--
-- TOC entry 2852 (class 2604 OID 27041)
-- Name: Empresa id_empresa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Empresa" ALTER COLUMN id_empresa SET DEFAULT nextval('public."Empresa_id_empresa_seq"'::regclass);


--
-- TOC entry 2841 (class 2604 OID 26936)
-- Name: Example pk; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Example" ALTER COLUMN pk SET DEFAULT nextval('public."Example_pk_seq"'::regclass);


--
-- TOC entry 2859 (class 2604 OID 27117)
-- Name: Factura id_factura; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Factura" ALTER COLUMN id_factura SET DEFAULT nextval('public."Factura_id_factura_seq"'::regclass);


--
-- TOC entry 2845 (class 2604 OID 26970)
-- Name: Familia_Aromatica id_fam; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Familia_Aromatica" ALTER COLUMN id_fam SET DEFAULT nextval('public."Familia_Aromatica_id_fam_seq"'::regclass);


--
-- TOC entry 2846 (class 2604 OID 26984)
-- Name: Fragancia cod_fragancia; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Fragancia" ALTER COLUMN cod_fragancia SET DEFAULT nextval('public."Fragancia_cod_fragancia_seq"'::regclass);


--
-- TOC entry 2843 (class 2604 OID 26958)
-- Name: Ingrediente ipc; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Ingrediente" ALTER COLUMN ipc SET DEFAULT nextval('public."Ingrediente_ipc_seq"'::regclass);


--
-- TOC entry 2858 (class 2604 OID 27106)
-- Name: Metodo_Pago id_pago; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Metodo_Pago" ALTER COLUMN id_pago SET DEFAULT nextval('public."Metodo_Pago_id_pago_seq"'::regclass);


--
-- TOC entry 2849 (class 2604 OID 27017)
-- Name: Pais id_pais; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Pais" ALTER COLUMN id_pais SET DEFAULT nextval('public."Pais_id_pais_seq"'::regclass);


--
-- TOC entry 2857 (class 2604 OID 27095)
-- Name: Pedido nro_pedido; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Pedido" ALTER COLUMN nro_pedido SET DEFAULT nextval('public."Pedido_nro_pedido_seq"'::regclass);


--
-- TOC entry 2847 (class 2604 OID 26998)
-- Name: Perfumista pasaporte; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Perfumista" ALTER COLUMN pasaporte SET DEFAULT nextval('public."Perfumista_pasaporte_seq"'::regclass);


--
-- TOC entry 2848 (class 2604 OID 27009)
-- Name: Region id_region; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Region" ALTER COLUMN id_region SET DEFAULT nextval('public."Region_id_region_seq"'::regclass);


--
-- TOC entry 2851 (class 2604 OID 27033)
-- Name: Telefono cod_pais; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Telefono" ALTER COLUMN cod_pais SET DEFAULT nextval('public."Telefono_cod_pais_seq"'::regclass);


--
-- TOC entry 2853 (class 2604 OID 27054)
-- Name: Tipo_Empresa id_tipo_empresa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Tipo_Empresa" ALTER COLUMN id_tipo_empresa SET DEFAULT nextval('public."Tipo_Empresa_id_tipo_empresa_seq"'::regclass);


--
-- TOC entry 2842 (class 2604 OID 26947)
-- Name: Tipo_Fragancia id_t_f; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Tipo_Fragancia" ALTER COLUMN id_t_f SET DEFAULT nextval('public."Tipo_Fragancia_id_t_f_seq"'::regclass);


--
-- TOC entry 2839 (class 2604 OID 26924)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 2837 (class 2604 OID 26896)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 2838 (class 2604 OID 26904)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3071 (class 0 OID 27081)
-- Dependencies: 240
-- Data for Name: Catalogo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Catalogo" (id_catalogo, id_empresa, id_fragancia, id_fragancia2, ipc, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3059 (class 0 OID 27022)
-- Dependencies: 228
-- Data for Name: Ciudad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Ciudad" (id_ciudad, nombre, id_pais, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3069 (class 0 OID 27070)
-- Dependencies: 238
-- Data for Name: Contrato; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Contrato" (nro_contrato, fecha_firma, condiciones_pago, condiciones_envio, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3067 (class 0 OID 27062)
-- Dependencies: 236
-- Data for Name: Detalle_Contrato; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Detalle_Contrato" (fecha_inicial, fecha_final, status, exclusividad, id_proveedor, id_productor, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3072 (class 0 OID 27087)
-- Dependencies: 241
-- Data for Name: Detalle_Pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Detalle_Pedido" (cantidad, monto_unidad, nro_pedido, id_detalle_contrato, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3063 (class 0 OID 27038)
-- Dependencies: 232
-- Data for Name: Empresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Empresa" (id_empresa, nombre, abrev, url, direccion, email, tipo_organizacion, id_tipo_empresa, id_ciudad, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3041 (class 0 OID 26933)
-- Dependencies: 210
-- Data for Name: Example; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Example" (pk, name, lastname, fecha_nacimiento, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3078 (class 0 OID 27114)
-- Dependencies: 247
-- Data for Name: Factura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Factura" (id_factura, sub_total, total, fecha_emision, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3047 (class 0 OID 26967)
-- Dependencies: 216
-- Data for Name: Familia_Aromatica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Familia_Aromatica" (id_fam, nombre, descripcion, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3050 (class 0 OID 26981)
-- Dependencies: 219
-- Data for Name: Fragancia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Fragancia" (cod_fragancia, nombre, descripcion, genero, min_edad, max_edad, id_cod_fragancia, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3048 (class 0 OID 26976)
-- Dependencies: 217
-- Data for Name: Fragancia_Ingrediente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Fragancia_Ingrediente" (id_ipc, id_cod_fragancia, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3051 (class 0 OID 26990)
-- Dependencies: 220
-- Data for Name: Fragancia_Presentacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Fragancia_Presentacion" (volumen, precio, id_fragancia, id_fragancia2, ipc, cod_fragancia, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3045 (class 0 OID 26955)
-- Dependencies: 214
-- Data for Name: Ingrediente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Ingrediente" (ipc, nombre_aceite, descripcion_aceite, tipo_aceite, descripcion_disolvente, precio, descripcion_visual, proceso, imagen, prohibido, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3076 (class 0 OID 27103)
-- Dependencies: 245
-- Data for Name: Metodo_Pago; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Metodo_Pago" (id_pago, tipo_pago, detalle, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3057 (class 0 OID 27014)
-- Dependencies: 226
-- Data for Name: Pais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Pais" (id_pais, nombre, id_region, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3074 (class 0 OID 27092)
-- Dependencies: 243
-- Data for Name: Pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Pedido" (nro_pedido, fecha_envio, fecha_recibo, metodo_envio, direccion_envio, id_detalle_contrato, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3053 (class 0 OID 26995)
-- Dependencies: 222
-- Data for Name: Perfumista; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Perfumista" (pasaporte, nombre, nombre_2, apellido, apelldio_2, id_pais, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3055 (class 0 OID 27006)
-- Dependencies: 224
-- Data for Name: Region; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Region" (id_region, nombre, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3061 (class 0 OID 27030)
-- Dependencies: 230
-- Data for Name: Telefono; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Telefono" (cod_pais, cod_area, num_telefono, id_empresa, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3065 (class 0 OID 27051)
-- Dependencies: 234
-- Data for Name: Tipo_Empresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Tipo_Empresa" (id_tipo_empresa, nombre, descripcion, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3043 (class 0 OID 26944)
-- Dependencies: 212
-- Data for Name: Tipo_Fragancia; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Tipo_Fragancia" (id_t_f, nombre, descripcion, abrev, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3039 (class 0 OID 26921)
-- Dependencies: 208
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 3034 (class 0 OID 26893)
-- Dependencies: 203
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_08_19_000000_create_failed_jobs_table	1
4	2020_04_19_233007_create_examples_table	1
5	2020_04_23_184210_create_tipo__fragancias_table	1
6	2020_04_23_184511_create_ingredientes_table	1
7	2020_04_23_185758_create_familia__aromaticas_table	1
8	2020_04_23_190052_create_fragancia__ingredientes_table	1
9	2020_04_23_190404_create_fragancias_table	1
10	2020_04_23_204239_create_fragancia__presentacions_table	1
11	2020_04_23_210054_create_perfumistas_table	1
12	2020_04_23_210835_create_regions_table	1
13	2020_04_23_211050_create_pais_table	1
14	2020_04_23_211321_create_ciudads_table	1
15	2020_04_23_211719_create_telefonos_table	1
16	2020_04_23_212059_create_empresas_table	1
17	2020_04_23_212644_create_tipo__empresas_table	1
18	2020_04_23_212831_create_detalle__contratos_table	1
19	2020_04_23_213327_create_contratos_table	1
20	2020_04_23_213530_create_catalogos_table	1
21	2020_04_23_214805_create_detalle__pedidos_table	1
22	2020_04_23_215555_create_pedidos_table	1
23	2020_04_23_220220_create_metodo__pagos_table	1
24	2020_04_23_220445_create_facturas_table	1
\.


--
-- TOC entry 3037 (class 0 OID 26912)
-- Dependencies: 206
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 3036 (class 0 OID 26901)
-- Dependencies: 205
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3105 (class 0 OID 0)
-- Dependencies: 239
-- Name: Catalogo_id_catalogo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Catalogo_id_catalogo_seq"', 1, false);


--
-- TOC entry 3106 (class 0 OID 0)
-- Dependencies: 227
-- Name: Ciudad_id_ciudad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Ciudad_id_ciudad_seq"', 1, false);


--
-- TOC entry 3107 (class 0 OID 0)
-- Dependencies: 237
-- Name: Contrato_nro_contrato_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Contrato_nro_contrato_seq"', 1, false);


--
-- TOC entry 3108 (class 0 OID 0)
-- Dependencies: 235
-- Name: Detalle_Contrato_fecha_inicial_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Detalle_Contrato_fecha_inicial_seq"', 1, false);


--
-- TOC entry 3109 (class 0 OID 0)
-- Dependencies: 231
-- Name: Empresa_id_empresa_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Empresa_id_empresa_seq"', 1, false);


--
-- TOC entry 3110 (class 0 OID 0)
-- Dependencies: 209
-- Name: Example_pk_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Example_pk_seq"', 1, false);


--
-- TOC entry 3111 (class 0 OID 0)
-- Dependencies: 246
-- Name: Factura_id_factura_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Factura_id_factura_seq"', 1, false);


--
-- TOC entry 3112 (class 0 OID 0)
-- Dependencies: 215
-- Name: Familia_Aromatica_id_fam_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Familia_Aromatica_id_fam_seq"', 1, false);


--
-- TOC entry 3113 (class 0 OID 0)
-- Dependencies: 218
-- Name: Fragancia_cod_fragancia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Fragancia_cod_fragancia_seq"', 1, false);


--
-- TOC entry 3114 (class 0 OID 0)
-- Dependencies: 213
-- Name: Ingrediente_ipc_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Ingrediente_ipc_seq"', 1, false);


--
-- TOC entry 3115 (class 0 OID 0)
-- Dependencies: 244
-- Name: Metodo_Pago_id_pago_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Metodo_Pago_id_pago_seq"', 1, false);


--
-- TOC entry 3116 (class 0 OID 0)
-- Dependencies: 225
-- Name: Pais_id_pais_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Pais_id_pais_seq"', 1, false);


--
-- TOC entry 3117 (class 0 OID 0)
-- Dependencies: 242
-- Name: Pedido_nro_pedido_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Pedido_nro_pedido_seq"', 1, false);


--
-- TOC entry 3118 (class 0 OID 0)
-- Dependencies: 221
-- Name: Perfumista_pasaporte_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Perfumista_pasaporte_seq"', 1, false);


--
-- TOC entry 3119 (class 0 OID 0)
-- Dependencies: 223
-- Name: Region_id_region_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Region_id_region_seq"', 1, false);


--
-- TOC entry 3120 (class 0 OID 0)
-- Dependencies: 229
-- Name: Telefono_cod_pais_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Telefono_cod_pais_seq"', 1, false);


--
-- TOC entry 3121 (class 0 OID 0)
-- Dependencies: 233
-- Name: Tipo_Empresa_id_tipo_empresa_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Tipo_Empresa_id_tipo_empresa_seq"', 1, false);


--
-- TOC entry 3122 (class 0 OID 0)
-- Dependencies: 211
-- Name: Tipo_Fragancia_id_t_f_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Tipo_Fragancia_id_t_f_seq"', 1, false);


--
-- TOC entry 3123 (class 0 OID 0)
-- Dependencies: 207
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 3124 (class 0 OID 0)
-- Dependencies: 202
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 24, true);


--
-- TOC entry 3125 (class 0 OID 0)
-- Dependencies: 204
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


-- Completed on 2020-04-23 23:31:21

--
-- PostgreSQL database dump complete
--

