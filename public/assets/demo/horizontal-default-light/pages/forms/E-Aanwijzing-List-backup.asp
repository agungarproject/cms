<% OPTION EXPLICIT %>
<!-- #INCLUDE file="connect.asp" -->

<html>
<head>
<title><%=Application("AppName")%> -- [<%=T_("MR List")%>]</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="script/ccs.css" type="text/css">
<link rel="stylesheet" href="script/ccs2.css" type="text/css">
</head>
<body class="bdy">

<!-- #INCLUDE file="top.asp" -->

<script>
window.onKeyUp=KeyUp;
function KeyUp()
{
   if (event.keyCode == 13)
      document.sort.submit();
}
</script>

<%
dim rstPrimary,rstPrimaryx, strA, strCompareA, strDataRow, numrows, page, internalcount, numberx, slink, xx
dim rstSecondary, rstSecondaryRFQ, rstSecondaryTRFQ
dim id, strAVa

set rstPrimary = Server.CreateObject("ADODB.Recordset")
set rstPrimaryx = Server.CreateObject("ADODB.Recordset")
set rstSecondary = Server.CreateObject("ADODB.Recordset")

id = request("id")

if request("SortField") ="" then
	dim strsql
	
	call paramsubCmd
	Cmd.commandtext="EXEC usp_GET_LIST @WHERE_NUMBER=1, @SHOW_TABLE='AANWIJZING_LIST',@WHERE_1='T_ID',@WHERE_1_QRY=?,@ORDBY='CREATED_DATE' select @@rowcount"
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_1_QRY", adVarChar, adParamInput, 1000,id)
	
	set rstPrimary = Cmd.Execute
	if not rstprimary.eof then
		set rstprimary = rstprimary.nextrecordset
		if not rstprimary.eof then numrows=cint(rstprimary(0))
	else
		 numrows=0
	end if
	
	call paramsubCmd
	Cmd.commandtext="EXEC usp_GET_LIST @WHERE_NUMBER=1, @SHOW_TABLE='AANWIJZING_LIST',@WHERE_1='T_ID',@WHERE_1_QRY=?,@ORDBY='CREATED_DATE'"
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_1_QRY", adVarChar, adParamInput, 1000,id)
	set rstPrimary = Cmd.Execute
else
	set rstPrimary = nothing
	if request("txtSearch")="" then
		strA = ""
	else
		strA = GetRequest("txtSearch")
		strAVa = Request("txtSearch")
	end If
	
	call paramsubCmd
	Cmd.commandtext="EXEC usp_GET_LIST @WHERE_NUMBER=201, @SHOW_TABLE='AANWIJZING_LIST',@WHERE_1='T_ID',@WHERE_1_QRY=?,@WHERE_2=?,@WHERE_2_QRY=?,@ORDBY=? select @@rowcount"
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_1_QRY", adVarChar, adParamInput, 1000,id)
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_2", adVarChar, adParamInput, 1000,request("SortField"))
	'Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_2_QRY", adVarChar, adParamInput, 1000,"%"& strA &"%")
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_2_QRY", adVarChar, adParamInput, 1000,"%"& strA &"%")
	Cmd.Parameters.Append Cmd.CreateParameter("@ORDBY", adVarChar, adParamInput, 1000,request("SortField") &" "& request("SortAD"))
	
	set rstPrimary = Cmd.Execute
	if not rstprimary.eof then
		set rstprimary = rstprimary.nextrecordset
		if not rstprimary.eof then numrows=cint(rstprimary(0))
	else
		 numrows=0
	end if
		
	call paramsubCmd
	Cmd.commandtext="EXEC usp_GET_LIST @WHERE_NUMBER=201, @SHOW_TABLE='AANWIJZING_LIST',@WHERE_1='T_ID',@WHERE_1_QRY=?,@WHERE_2=?,@WHERE_2_QRY=?,@ORDBY=?"
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_1_QRY", adVarChar, adParamInput, 1000,id)
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_2", adVarChar, adParamInput, 1000,request("SortField"))
	Cmd.Parameters.Append Cmd.CreateParameter("@WHERE_2_QRY", adVarChar, adParamInput, 1000,"%"& strA &"%")
	Cmd.Parameters.Append Cmd.CreateParameter("@ORDBY", adVarChar, adParamInput, 1000,request("SortField") &" "& request("SortAD"))
	
	set rstPrimary = Cmd.Execute
end If

function getDataRow()
x = 1
page=getrequest("page")
if page="" then page=1
page=cint(page)
internalcount=1
if not rstPrimary.eof then
	if page>1 then 
		rstPrimary.move (page-1)*limitRow
		numberx=((page-1)*limitRow)+1
	else
		numberx=1
	end if
	x=numberx
end if
do while not rstPrimary.EOF
	if internalcount>limitrow then exit do
	if strCompareA <> rstPrimary(0) then
	
		getDataRow = getDataRow & "" &_
			"<TR><TD class=""bevel3"" align=""center"" height=""25""><P align=center>" & x & "</P></TD>" &_
			"<TD class=""bevel3"" height=""25"">" & XhtmlEncode(conv_DBDateToAppDate(rstPrimary("CREATED_DATE"))) & " - " & XhtmlEncode(conv_DBDateToAppTime(rstPrimary("CREATED_DATE"))) & "</TD>" &_
			"<TD class=""bevel3"" height=""25""><A class=""links1"" HREF=""printdur.asp?type=E&strAID=" & XhtmlEncode(rstPrimary("ROWSTAMP")) & "&strTID=" & XhtmlEncode(rstPrimary("T_ID")) & """>" & XhtmlEncode(rstPrimary("HARI")) & "</A></TD>" &_
			"<TD class=""bevel3"" align=""center"" height=""25"">" & XhtmlEncode(rstPrimary("TANGGAL")) & "" &_
			"<TD class=""bevel3"" align=""center"" height=""25"">" & XhtmlEncode(rstPrimary("WAKTU1")) & "" &_
			"<TD class=""bevel3"" align=""center"" height=""25"">" & XhtmlEncode(rstPrimary("WAKTU2")) & "" &_
			"<TD class=""bevel3"" align=""center"" height=""25"">" & XhtmlEncode(rstPrimary("ID_NUMBER")) & ""
			
		strCompareA = rstPrimary(0)
	end if

	rstPrimary.MoveNext
	if not rstPrimary.EOF then
		if strCompareA <> rstPrimary(0) then
			getDataRow = getDataRow &  "</TD></TR>"
			x = x + 1:internalcount=internalcount+1
		end if
	else
		x = x + 1:internalcount=internalcount+1
	end if
loop
slink=""
for xx=1 to abs(int(-(numrows/limitrow)))
	slink=slink & "<a href=""e-mr-list.asp?submit="& T_("Search") &"&txtSearch="& request("txtSearch") &"&sortfield="& request("sortfield") &"&page="&xx&""" class=""links1"">"& xx &"</a>&nbsp;"
	if xx mod 39 = 0 then slink=slink & "<br>"
next
getDataRow = getDataRow & "<tr><td align=""center"" colspan=7 class=""bevel3b"">Total : "& numrows &" data, Halaman ("& page &") dari :&nbsp;"& slink &"</td></tr>"
end function

strDataRow = getDataRow()

rstPrimary.close
set rstPrimary = nothing
oConn.Close
%>
<br />
<TABLE width="100%" border=0 cellspacing=0 cellpadding=0 height="80%">
	<TR><TD ALIGN=CENTER>
		<TABLE border=0 cellspacing=1 cellpadding=1 bgcolor="#003333" width="98%">
			<TR><TD>
				<TABLE width="100%" border="0" cellspacing="1" cellpadding="1">
					<TR ALIGN=CENTER><TD COLSPAN=9 class=bevel1><%=T_("PR LIST")%></TD></TR>
					<TR>
                <TD class="bevel4" colspan=9 height=25>&#149; <%=T_("MR SEARCH")%> &#149;</TD>
              </TR>
					<TR><TD class="bevel2" align="center" width="150"><%=T_("Search By")%>:</TD>
						<FORM NAME="sort" ACTION="" METHOD="POST">
						<TD align=center class="bevel3" width="70">
							<SELECT NAME="SortField" class="Input2">
								<option value="HARI" <%if request("SortField") = "HARI" then response.write "selected"%>><%=T_("DAY")%></option>
								<option value="TANGGAL" <%if request("SortField") = "TANGGAL" then response.write "selected"%>><%=T_("DATE")%></option>
								<option value="WAKTU1" <%if request("SortField") = "WAKTU1" then response.write "selected"%>><%=T_("START TIME")%></option>
								<option value="WAKTU2" <%if request("SortField") = "WAKTU2" then response.write "selected"%>><%=T_("END TIME")%></option>
							</SELECT>
						</TD>
						<TD class="bevel2" align="center" width="100"><%=T_("Search")%>:</TD>
    		            <TD class="bevel3" width="20"><INPUT NAME="txtSearch" TYPE="text" size="35" class="Input2" onKeyUp="KeyUp()" value="<%=strAVa%>"></TD>
						<TD class="bevel2" align="center" width="100"><%=T_("Sort")%>:</TD>
						<TD class="bevel3" width="70">
							<SELECT NAME="SortAD" class="Input2">
								<option value="ASC"<%if request("SortAD") = "ASC" then response.write "selected"%>><%=T_("Ascending")%></option>
								<option value="DESC"<%if request("SortAD") = "DESC" then response.write "selected"%>><%=T_("Descending")%></option>
							</SELECT></TD>
						<TD class="bevel2" width="70"><INPUT TYPE="submit" VALUE="<%=T_("Search")%>" class="Submit1"></TD>
						<TD class="bevel2" width="70"><input type="button" VALUE="<%=T_("Create")%>"class="Submit1" onclick="location.href='printdur.asp?strID=<%=id%>'"></TD>
						</FORM>
					</TR>
					<TR><TD colspan=8>
						
                  <TABLE width="100%" border="0" cellspacing="1" cellpadding="1">
                    <TR> 
                      <TD class="bevel4" colspan=7 height=25>&#149; <%=T_("PR LIST")%> &#149;</TD>
                    </TR>
                    <TR> 
                      <TD class="bevel4" width="5%"><P align=center><%=T_("No")%>.</P></TD>
                      <TD class="bevel4" width="10%"><P align=center><%=T_("CREATED DATE")%></P></TD>
                      <TD class="bevel4" width="20%"><P align=center><%=T_("DAY")%></P></TD>
                      <TD class="bevel4" width="20%"><P align=center><%=T_("DATE")%></P></TD>
                      <TD class="bevel4" width="13%"><P align=center><%=T_("START TIME")%></P></TD>
                      <TD class="bevel4" width="12%"><P align=center><%=T_("END TIME")%></P></TD>
                      <TD class="bevel4" width="12%"><P align=center><%=T_("ID NUMBER")%></P></TD>
                    </TR>
                    <% =strDataRow 
					%>
					<tr> 
					<td class="bevel4-1" align="center" colspan=10><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr> 
						<td align="left">
							<input name="Submit" type="submit" class="Submit1" id="Submit4" value="Close" Onclick="JavaScript:window.close();">
						</td>
					</tr></table></td>
          </tr>
                  </TABLE>
					</TD></TR>
				</TABLE>
			</TD></TR>
		</TABLE>
	</TD></TR>		
</TABLE>

<script>
function setCommandName(objForm)
{
	objForm.strCommandName.value = objForm.strCommandType.options[objForm.strCommandType.selectedIndex].text;
}
</script>
</BODY>
</HTML>
