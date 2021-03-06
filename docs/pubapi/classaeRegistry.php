<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>aeRegistry class Reference</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>aeRegistry Class Reference</h1>This class is an interface to the global object registry. 
<a href="#_details">More...</a>
<p>
<code>#include &lt;<a class="el" href="registry_8h-source.php">registry.h</a>&gt;</code>
<p>
<p>Inheritance diagram for aeRegistry:
<p><center><img src="classaeRegistry.png" usemap="#aeRegistry_map" border="0" alt=""></center>
<map name="aeRegistry_map">
<area href="classaeBase.php" alt="aeBase" shape="rect" coords="0,0,72,24">
</map>
<a href="classaeRegistry-members.php">List of all members.</a><table border=0 cellpadding=0 cellspacing=0>
<tr><td></td></tr>
<tr><td colspan=2><br><h2>Public Methods</h2></td></tr>
<tr><td nowrap align=right valign=top>&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a0">aeRegistry</a> (int argc, char *argv[])</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Initialize the registry.</em> <a href="#a0"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>bool&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a2">CmdLineHelp</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Check if the -help flag was specified in the command line.</em> <a href="#a2"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a3">Help</a> ()</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Print help.</em> <a href="#a3"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeTimer.php">aeTimer</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a4">GetTimer</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the timer pointer.</em> <a href="#a4"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeEngine.php">aeEngine</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a5">GetEngine</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the engine pointer.</em> <a href="#a5"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeSystem.php">aeSystem</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a6">GetSystem</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the system pointer.</em> <a href="#a6"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeObject.php">aeObject</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a7">FindObject</a> (unsigned int)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find object by ID.</em> <a href="#a7"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeObject.php">aeObject</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a8">FindObjectByName</a> (const char *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find object by name.</em> <a href="#a8"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>unsigned int&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a9">GetObjectCount</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the number of objects in the objectpool.</em> <a href="#a9"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeTexture.php">aeTexture</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a10">FindTexture</a> (unsigned int)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find texture by ID.</em> <a href="#a10"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeTexture.php">aeTexture</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a11">FindTextureByName</a> (const char *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find texture by name.</em> <a href="#a11"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>unsigned int&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a12">GetTextureCount</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the number of textures in the texturepool.</em> <a href="#a12"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeMaterial.php">aeMaterial</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a13">FindMaterial</a> (unsigned int)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find material by ID.</em> <a href="#a13"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaeMaterial.php">aeMaterial</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a14">FindMaterialByName</a> (const char *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Find material by name.</em> <a href="#a14"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>unsigned int&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a15">GetMaterialCount</a> () const</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Get the number of materials in the materialpool.</em> <a href="#a15"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a16">PushObjectToPool</a> (<a class="el" href="classaeObject.php">aeObject</a> *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Push an object to the objectpool.</em> <a href="#a16"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a17">PushTextureToPool</a> (<a class="el" href="classaeTexture.php">aeTexture</a> *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Push a texture to the texturepool.</em> <a href="#a17"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top>void&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a18">PushMaterialToPool</a> (<a class="el" href="classaeMaterial.php">aeMaterial</a> *)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Push a material to the materialpool.</em> <a href="#a18"></a><em></em></font><br><br></td></tr>
<tr><td nowrap align=right valign=top><a class="el" href="classaePlugin.php">aePlugin</a> *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#a19">LoadPlugin</a> (aePluginID)</td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Load a plugin.</em> <a href="#a19"></a><em></em></font><br><br></td></tr>
<tr><td colspan=2><br><h2>Static Public Attributes</h2></td></tr>
<tr><td nowrap align=right valign=top><a name="p0" doxytag="aeRegistry::self_ptr"></a>
aeRegistry *&nbsp;</td><td valign=bottom><a class="el" href="classaeRegistry.php#p0">self_ptr</a></td></tr>
<tr><td>&nbsp;</td><td><font size=-1><em>Global registry self ref.</em></font><br><br></td></tr>
</table>
<hr><a name="_details"></a><h2>Detailed Description</h2>
This class is an interface to the global object registry.
<p>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00048">48</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.<hr><h2>Constructor &amp; Destructor Documentation</h2>
<a name="a0" doxytag="aeRegistry::aeRegistry"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> aeRegistry::aeRegistry </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">int&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>argc</em>, </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td class="md" nowrap>char *&nbsp;</td>
          <td class="mdname" nowrap>&nbsp; <em>argv</em>[]</td>
        </tr>
        <tr>
          <td></td>
          <td class="md">)&nbsp;</td>
          <td class="md" colspan="2"></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Initialize the registry.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>argc</em>&nbsp;</td><td>argc from main(). </td></tr>
    <tr><td valign=top><em>argv</em>&nbsp;</td><td>argv from main().</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<hr><h2>Member Function Documentation</h2>
<a name="a2" doxytag="aeRegistry::CmdLineHelp"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> bool aeRegistry::CmdLineHelp </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Check if the -help flag was specified in the command line.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>true if -help was requested.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00080">80</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a13" doxytag="aeRegistry::FindMaterial"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeMaterial.php">aeMaterial</a>* aeRegistry::FindMaterial </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">unsigned&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp; <em>int</em>          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find material by ID.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>int</em>&nbsp;</td><td>The material ID.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The material.</dd></dl>
    </td>
  </tr>
</table>
<a name="a14" doxytag="aeRegistry::FindMaterialByName"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeMaterial.php">aeMaterial</a>* aeRegistry::FindMaterialByName </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">const char *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find material by name.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>char</em>&nbsp;</td><td>* The material name.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The material.</dd></dl>
    </td>
  </tr>
</table>
<a name="a7" doxytag="aeRegistry::FindObject"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeObject.php">aeObject</a>* aeRegistry::FindObject </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">unsigned&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp; <em>int</em>          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find object by ID.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>int</em>&nbsp;</td><td>The object ID.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The object.</dd></dl>
    </td>
  </tr>
</table>
<a name="a8" doxytag="aeRegistry::FindObjectByName"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeObject.php">aeObject</a>* aeRegistry::FindObjectByName </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">const char *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find object by name.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>char</em>&nbsp;</td><td>* The object name.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The object.</dd></dl>
    </td>
  </tr>
</table>
<a name="a10" doxytag="aeRegistry::FindTexture"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeTexture.php">aeTexture</a>* aeRegistry::FindTexture </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">unsigned&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp; <em>int</em>          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find texture by ID.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>int</em>&nbsp;</td><td>The texture ID.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The texture.</dd></dl>
    </td>
  </tr>
</table>
<a name="a11" doxytag="aeRegistry::FindTextureByName"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeTexture.php">aeTexture</a>* aeRegistry::FindTextureByName </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">const char *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Find texture by name.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>char</em>&nbsp;</td><td>* The texture name.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>The texture.</dd></dl>
    </td>
  </tr>
</table>
<a name="a5" doxytag="aeRegistry::GetEngine"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeEngine.php">aeEngine</a>* aeRegistry::GetEngine </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the engine pointer.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>A pointer to aeEngine-</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00102">102</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a15" doxytag="aeRegistry::GetMaterialCount"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> unsigned int aeRegistry::GetMaterialCount </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the number of materials in the materialpool.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The number of materials.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00188">188</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a9" doxytag="aeRegistry::GetObjectCount"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> unsigned int aeRegistry::GetObjectCount </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the number of objects in the objectpool.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The number of objects.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00136">136</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a6" doxytag="aeRegistry::GetSystem"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeSystem.php">aeSystem</a>* aeRegistry::GetSystem </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the system pointer.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>A pointer to <a class="el" href="classaeSystem.php">aeSystem</a>.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00110">110</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a12" doxytag="aeRegistry::GetTextureCount"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> unsigned int aeRegistry::GetTextureCount </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the number of textures in the texturepool.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>The number of textures.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00162">162</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a4" doxytag="aeRegistry::GetTimer"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaeTimer.php">aeTimer</a>* aeRegistry::GetTimer </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap> const<code> [inline]</code></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Get the timer pointer.
<p>
<dl compact><dt><b>Returns:</b></dt><dd>A pointer to <a class="el" href="classaeTimer.php">aeTimer</a>.</dd></dl>

<p>
Definition at line <a class="el" href="registry_8h-source.php#l00094">94</a> of file <a class="el" href="registry_8h-source.php">registry.h</a>.    </td>
  </tr>
</table>
<a name="a3" doxytag="aeRegistry::Help"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeRegistry::Help </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Print help.
<p>
    </td>
  </tr>
</table>
<a name="a19" doxytag="aeRegistry::LoadPlugin"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> <a class="el" href="classaePlugin.php">aePlugin</a>* aeRegistry::LoadPlugin </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top">aePluginID&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Load a plugin.
<p>
Use the AE_GET_PLUGIN() macro to load a plugin.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aePluginID</em>&nbsp;</td><td>The plugin ID.</td></tr>
  </table>
</dl>
<dl compact><dt><b>Returns:</b></dt><dd>Pointer to the plugin.</dd></dl>
    </td>
  </tr>
</table>
<a name="a18" doxytag="aeRegistry::PushMaterialToPool"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeRegistry::PushMaterialToPool </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeMaterial.php">aeMaterial</a> *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Push a material to the materialpool.
<p>
Normally you don't need to do this since adding a material will do it automagically.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aeMaterial</em>&nbsp;</td><td>* The material.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a16" doxytag="aeRegistry::PushObjectToPool"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeRegistry::PushObjectToPool </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeObject.php">aeObject</a> *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Push an object to the objectpool.
<p>
Use <a class="el" href="classaeEngine.php#a10">aeEngine::AddObject()</a> to add an object.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aeObject</em>&nbsp;</td><td>* The object.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<a name="a17" doxytag="aeRegistry::PushTextureToPool"></a><p>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="md">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="md" nowrap valign="top"> void aeRegistry::PushTextureToPool </td>
          <td class="md" valign="top">(&nbsp;</td>
          <td class="md" nowrap valign="top"><a class="el" href="classaeTexture.php">aeTexture</a> *&nbsp;</td>
          <td class="mdname1" valign="top" nowrap>&nbsp;          </td>
          <td class="md" valign="top">)&nbsp;</td>
          <td class="md" nowrap></td>
        </tr>

      </table>
    </td>
  </tr>
</table>
<table cellspacing=5 cellpadding=0 border=0>
  <tr>
    <td>
      &nbsp;
    </td>
    <td>

<p>
Push a texture to the texturepool.
<p>
Normally you don't need to do this since the texture loader plugin will take care of it.
<p>
<dl compact><dt><b>Parameters:</b></dt><dd>
  <table border="0" cellspacing="2" cellpadding="0">
    <tr><td valign=top><em>aeTexture</em>&nbsp;</td><td>* The texture.</td></tr>
  </table>
</dl>
    </td>
  </tr>
</table>
<hr>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="registry_8h-source.php">registry.h</a></ul>
<hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:23 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
