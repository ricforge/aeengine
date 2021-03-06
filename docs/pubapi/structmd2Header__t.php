<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>md2Header_t struct Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>md2Header_t Struct Reference<br>
<small>
[<a class="el" href="group__mdlldrstructs.php">AE model loader structures</a>]</small>
</h1>A MD2 header structure. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="mdlstruct_8h-source.php">mdlstruct.h</a>&gt;</code>
<p>
<a href="structmd2Header__t-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Attributes</h2></td></tr>
<tr><td nowrap align=right valign=top><a name="m0" doxytag="md2Header_t::ident"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m0">ident</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>MD2 file ident. Should be equal to "IDP2" (ID polygon 2).</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m1" doxytag="md2Header_t::version"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m1">version</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>MD2 file version. Should be equal to 8.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m2" doxytag="md2Header_t::skinwidth"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m2">skinwidth</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Width of texture.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m3" doxytag="md2Header_t::skinheight"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m3">skinheight</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Height of texture.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m4" doxytag="md2Header_t::frameSize"></a>
unsigned int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m4">frameSize</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of bytes per frame.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m5" doxytag="md2Header_t::numSkins"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m5">numSkins</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of textures.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m6" doxytag="md2Header_t::numVertices"></a>
unsigned int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m6">numVertices</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of vertices.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m7" doxytag="md2Header_t::numTexCoords"></a>
unsigned int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m7">numTexCoords</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of texture coordinates.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m8" doxytag="md2Header_t::numTriangles"></a>
unsigned int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m8">numTriangles</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of triangles.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m9" doxytag="md2Header_t::numGLcmds"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m9">numGLcmds</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of OpenGL command bytes.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m10" doxytag="md2Header_t::numFrames"></a>
unsigned int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m10">numFrames</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Number of frames.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m11" doxytag="md2Header_t::offsetSkins"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m11">offsetSkins</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Offset to skin names.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m12" doxytag="md2Header_t::offsetST"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m12">offsetST</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Offset to texture coordinates.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m13" doxytag="md2Header_t::offsetTris"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m13">offsetTris</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Offset of triangle mesh.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m14" doxytag="md2Header_t::offsetFrames"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m14">offsetFrames</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Offset of frame data (vertices).</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m15" doxytag="md2Header_t::offsetGLcmds"></a>
int&nbsp;</td><td valign=bottom><a class="el" href="structmd2Header__t.php#m15">offsetGLcmds</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Offset of OpenGL commands.</em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a name="m16" doxytag="md2Header_t::offsetEnd"></a>
int&nbsp;</td><td valign=bottom><b>offsetEnd</b></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
A MD2 header structure.
<p>

<p>
Definition at line <a class="el" href="mdlstruct_8h-source.php#l00077">77</a> of file <a class="el" href="mdlstruct_8h-source.php">mdlstruct.h</a>.<hr>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="mdlstruct_8h-source.php">mdlstruct.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
