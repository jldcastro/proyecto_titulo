<?php

namespace Calibracion\Http\Controllers;

use Illuminate\Http\Request;

use Calibracion\Http\Requests;
use Calibracion\Http\Controllers\Controller;
use Calibracion\Equipo;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function invoice()
    {

        PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.equipos.equipo', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>ÍNDICE</TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="atisae">
	<META NAME="CREATED" CONTENT="20161029;150500000000000">
	<META NAME="CHANGEDBY" CONTENT="Microsoft">
	<META NAME="CHANGED" CONTENT="20161029;150500000000000">
	<META NAME="AppVersion" CONTENT="12.0000">
	<META NAME="Company" CONTENT="atisae">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE TYPE="text/css">
	<!--
		@page { size: 8.5in 11in; margin-left: 0.98in; margin-right: 0.89in; margin-top: 0.59in; margin-bottom: 0.98in }
		P { margin-right: -0.39in; margin-top: 0.17in; margin-bottom: 0in; direction: ltr; text-align: justify; widows: 2; orphans: 2 }
		P.western { font-family: "Arial Narrow", serif; font-size: 11pt }
		P.cjk { font-size: 11pt }
		H2 { margin-top: 0in; margin-bottom: 0in; direction: ltr; widows: 2; orphans: 2 }
		H2.western { font-family: "CG Times", serif; font-size: 11pt; so-language: en-US }
		H2.cjk { font-family: "Times New Roman"; font-size: 11pt }
		H2.ctl { font-family: "Times New Roman"; font-size: 10pt; font-weight: normal }
		H4 { margin-top: 0in; margin-bottom: 0in; direction: ltr; widows: 2; orphans: 2; text-decoration: underline; page-break-after: auto }
		H4.western { font-family: "Times New Roman", serif; font-size: 14pt; so-language: en-US; font-weight: normal }
		H4.cjk { font-family: "Times New Roman"; font-size: 14pt; font-weight: normal }
		H4.ctl { font-family: "Times New Roman"; font-size: 10pt; font-weight: normal }
	-->
	</STYLE>
</HEAD>
<BODY LANG="es-ES" DIR="LTR">
<DIV TYPE=HEADER>
	<TABLE WIDTH=659 CELLPADDING=5 CELLSPACING=0>
		<COL WIDTH=72>
		<COL WIDTH=415>
		<COL WIDTH=140>
		<TR VALIGN=TOP>
			<TD ROWSPAN=2 WIDTH=72 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
				<P ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in"><IMG SRC="i_1f8207cef14978c2_html_db23e44a.png" NAME="Imagen 2" ALIGN=BOTTOM WIDTH=51 HEIGHT=53 BORDER=0></P>
			</TD>
			<TD WIDTH=415 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
				<P ALIGN=CENTER STYLE="margin-right: 0in; margin-top: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT SIZE=3><B>FORMULARIO
				- F4 </B></FONT></FONT></FONT>
				</P>
			</TD>
			<TD ROWSPAN=2 WIDTH=140 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
				<P ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=2>FECHA:13-05-2013</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=2>REV.:
				Revisión 2</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=2>PAG.:
				<FONT FACE="Arial, serif"><SDFIELD TYPE=PAGE SUBTYPE=RANDOM FORMAT=PAGE></SDFIELD>
				de <SDFIELD TYPE=DOCSTAT SUBTYPE=PAGE FORMAT=PAGE>7</SDFIELD></FONT></FONT></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=415 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
				<P ALIGN=CENTER STYLE="margin-right: 0in; margin-top: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT SIZE=3><B>HOJA
				DE VIDA EQUIPOS</B></FONT></FONT></FONT></P>
			</TD>
		</TR>
	</TABLE>
	<P ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in; margin-bottom: 0.26in">
	<BR>
	</P>
</DIV>
<TABLE WIDTH=662 CELLPADDING=5 CELLSPACING=0 STYLE="page-break-before: always">
	<COLGROUP>
		<COL WIDTH=65>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=75>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=47>
		<COL WIDTH=1>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=26>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=66>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=18>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=57>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=27>
	</COLGROUP>
	<COLGROUP>
		<COL WIDTH=178>
	</COLGROUP>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=12 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Equipo</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: none; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Marca
			/ Modelo</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border-top: none; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Nº
			Serie</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>COD.
			INTERNO</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Capacidad</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Clase
			OIML</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=2 WIDTH=102 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=85 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Error
			máx.: </B></FONT></FONT></FONT></FONT>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=215 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Lugar
			de almacenamiento</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H4 LANG="en-US" CLASS="western"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="text-decoration: none"><B>Fecha
			de compra</B></SPAN></FONT></FONT></H4>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H4 LANG="en-US" CLASS="western"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="text-decoration: none"><B><SPAN STYLE="background: #ffff00">N°
			OC</SPAN></B></SPAN></FONT></FONT></H4>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H4 LANG="en-US" CLASS="western"><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="text-decoration: none"><B>Proveedor</B></SPAN></FONT></FONT></H4>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: none; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Intervalo
			de Mantenimiento</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B><SPAN STYLE="background: #ffff00">Fecha
			1er manteminiemto</SPAN></B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B><SPAN STYLE="background: #ffff00">avisar</SPAN></B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Pauta
			de mantención</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Intervalo
			de calibración</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Intervalo
			de verificación</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=3 WIDTH=206 HEIGHT=13 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>Criterio
			de aceptación</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=1 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: none; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><B>:</B></FONT></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=6 WIDTH=423 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD COLSPAN=10 WIDTH=650 HEIGHT=77 VALIGN=TOP STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" ALIGN=JUSTIFY><FONT FACE="Arial, serif">Observaciones:</FONT></H2>
			<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=7 BGCOLOR="#d9d9d9" STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western" ALIGN=CENTER><FONT FACE="Arial, serif"><FONT SIZE=2>Actividad</FONT></FONT></H2>
		</TD>
		<TD WIDTH=75 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" ALIGN=CENTER><FONT FACE="Arial, serif"><FONT SIZE=2>Fecha
			realización</FONT></FONT></H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" ALIGN=CENTER><FONT FACE="Arial, serif"><FONT SIZE=2>Fecha
			próxima</FONT></FONT></H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><B>Realizado
			por</B></FONT></FONT></FONT></P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><B>N°
			de certificado</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=178 BGCOLOR="#d9d9d9" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=CENTER STYLE="margin-right: 0in; margin-top: 0in">
			<FONT FACE="Times New Roman, serif"><FONT SIZE=2><FONT FACE="Arial, serif"><B>Observación</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=14 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=65 HEIGHT=13 STYLE="border-top: 1px solid #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0in">
			<H2 LANG="en-US" CLASS="western"><BR>
			</H2>
		</TD>
		<TD WIDTH=75 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=3 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<H2 LANG="en-US" CLASS="western" STYLE="font-weight: normal"><BR>
			</H2>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD COLSPAN=2 WIDTH=94 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
		<TD WIDTH=178 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.05in; padding-right: 0.05in">
			<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
			<BR>
			</P>
		</TD>
	</TR>
</TABLE>
<P CLASS="western" ALIGN=LEFT STYLE="margin-right: 0in; margin-top: 0in">
<BR>
</P>
</BODY>
</HTML>');
        return $pdf->stream('invoice');
    }

    public function getData()
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
