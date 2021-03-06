<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>registry.h Source File</title>
<link href="doxygen.css" rel="stylesheet" type="text/css">
</head><body>
<!-- Generated by Doxygen 1.3-rc2 -->
<center>
<a class="qindex" href="index.php">Main Page</a> &nbsp; <a class="qindex" href="modules.php">Modules</a> &nbsp; <a class="qindex" href="hierarchy.php">Class Hierarchy</a> &nbsp; <a class="qindex" href="classes.php">Alphabetical List</a> &nbsp; <a class="qindex" href="annotated.php">Compound List</a> &nbsp; <a class="qindex" href="files.php">File List</a> &nbsp; <a class="qindex" href="functions.php">Compound Members</a> &nbsp; </center>
<hr><h1>registry.h</h1><div class="fragment"><pre>00001 <span class="comment">/*</span>
00002 <span class="comment"> *  AE Engine</span>
00003 <span class="comment"> *</span>
00004 <span class="comment"> *  Copyright (C) 2003 Riku "Rakkis" Nurminen</span>
00005 <span class="comment"> *</span>
00006 <span class="comment"> *  This program is free software; you can redistribute it and/or modify</span>
00007 <span class="comment"> *  it under the terms of the GNU General Public License as published by</span>
00008 <span class="comment"> *  the Free Software Foundation; either version 2 of the License, or</span>
00009 <span class="comment"> *  (at your option) any later version.</span>
00010 <span class="comment"> *</span>
00011 <span class="comment"> *  This program is distributed in the hope that it will be useful,</span>
00012 <span class="comment"> *  but WITHOUT ANY WARRANTY; without even the implied warranty of</span>
00013 <span class="comment"> *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the</span>
00014 <span class="comment"> *  GNU General Public License for more details.</span>
00015 <span class="comment"> *</span>
00016 <span class="comment"> *  You should have received a copy of the GNU General Public License</span>
00017 <span class="comment"> *  along with this program; if not, write to the Free Software</span>
00018 <span class="comment"> *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA</span>
00019 <span class="comment"> *</span>
00020 <span class="comment"> */</span>
00021 
00022 <span class="preprocessor">#ifndef __AELIB_AEREG_REGISTRY_H__</span>
00023 <span class="preprocessor"></span><span class="preprocessor">#define __AELIB_AEREG_REGISTRY_H__</span>
00024 <span class="preprocessor"></span>
00025 <span class="preprocessor">#define ONLY_INCLUDE_STD</span>
00026 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aedefs.h&gt;</span>
00027 <span class="preprocessor">#undef ONLY_INCLUDE_STD</span>
00028 <span class="preprocessor"></span><span class="preprocessor">#include &lt;aeengine/engine.h&gt;</span>
00029 <span class="preprocessor">#include &lt;aegeom/object.h&gt;</span>
00030 <span class="preprocessor">#include &lt;aegfx/material.h&gt;</span>
00031 <span class="preprocessor">#include &lt;aegfx/texture.h&gt;</span>
00032 <span class="preprocessor">#include &lt;aeplugin/plugin.h&gt;</span>
00033 <span class="preprocessor">#include &lt;aereg/base.h&gt;</span>
00034 <span class="preprocessor">#include &lt;aesys/system.h&gt;</span>
00035 <span class="preprocessor">#include &lt;aesys/timer.h&gt;</span>
00036 
00038 <span class="preprocessor">#define AE_GET_PLUGIN(Registry, Plugin) (Plugin *)Registry-&gt;LoadPlugin(AE_PLUGIN_##Plugin)</span>
00039 <span class="preprocessor"></span>
00041 <span class="keyword">typedef</span> <a class="code" href="classaePlugin.php">aePlugin</a> *(*PLG_ENTRY)(<a class="code" href="classaeRegistry.php">aeRegistry</a> *aeReg);
00042 
00043 <span class="keyword">class </span><a class="code" href="classaeSystem.php">aeSystem</a>;
00044 
<a name="l00048"></a><a class="code" href="classaeRegistry.php">00048</a> <span class="keyword">class </span><a class="code" href="classaeRegistry.php">aeRegistry</a>: <span class="keyword">public</span> <a class="code" href="classaeBase.php">aeBase</a> {
00049         AECF_CNDEF
00050 
00051  <span class="keyword">private</span>:
00052         <a class="code" href="classaeTimer.php">aeTimer</a> *timer;
00053         <a class="code" href="classaeSystem.php">aeSystem</a> *system;
00054         <a class="code" href="classaeEngine.php">aeEngine</a> *engine;
00055         std::vector&lt;aeObject*&gt; objectpool;
00056         std::vector&lt;aeMaterial*&gt; materialpool;
00057         std::vector&lt;aeTexture*&gt; texturepool;
00058         std::vector&lt;aePlugin*&gt; pluginpool;
00059         <span class="keywordtype">bool</span> cmdlinehelp;
00060 
00061  <span class="keyword">public</span>:
00068         <a class="code" href="classaeRegistry.php#a0">aeRegistry</a>(<span class="keywordtype">int</span> argc, <span class="keywordtype">char</span> *argv[]);
00069         ~<a class="code" href="classaeRegistry.php">aeRegistry</a>();
00070 
<a name="l00072"></a><a class="code" href="classaeRegistry.php#p0">00072</a>         <span class="keyword">static</span> <a class="code" href="classaeRegistry.php">aeRegistry</a> *<a class="code" href="classaeRegistry.php#p0">self_ptr</a>;
00073 
<a name="l00080"></a><a class="code" href="classaeRegistry.php#a2">00080</a>         <span class="keywordtype">bool</span> <a class="code" href="classaeRegistry.php#a2">CmdLineHelp</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> cmdlinehelp; }
00081 
00086         <span class="keywordtype">void</span> <a class="code" href="classaeRegistry.php#a3">Help</a>();
00087 
<a name="l00094"></a><a class="code" href="classaeRegistry.php#a4">00094</a>         <a class="code" href="classaeTimer.php">aeTimer</a> *<a class="code" href="classaeRegistry.php#a4">GetTimer</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> timer; }
00095 
<a name="l00102"></a><a class="code" href="classaeRegistry.php#a5">00102</a>         <a class="code" href="classaeEngine.php">aeEngine</a> *<a class="code" href="classaeRegistry.php#a5">GetEngine</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> engine; }
00103 
<a name="l00110"></a><a class="code" href="classaeRegistry.php#a6">00110</a>         <a class="code" href="classaeSystem.php">aeSystem</a> *<a class="code" href="classaeRegistry.php#a6">GetSystem</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> system; }
00111 
00119         <a class="code" href="classaeObject.php">aeObject</a> *<a class="code" href="classaeRegistry.php#a7">FindObject</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>);
00120 
00128         <a class="code" href="classaeObject.php">aeObject</a> *<a class="code" href="classaeRegistry.php#a8">FindObjectByName</a>(<span class="keyword">const</span> <span class="keywordtype">char</span> *);
00129 
<a name="l00136"></a><a class="code" href="classaeRegistry.php#a9">00136</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeRegistry.php#a9">GetObjectCount</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> objectpool.size(); }
00137 
00145         <a class="code" href="classaeTexture.php">aeTexture</a> *<a class="code" href="classaeRegistry.php#a10">FindTexture</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>);
00146 
00154         <a class="code" href="classaeTexture.php">aeTexture</a> *<a class="code" href="classaeRegistry.php#a11">FindTextureByName</a>(<span class="keyword">const</span> <span class="keywordtype">char</span> *);
00155 
<a name="l00162"></a><a class="code" href="classaeRegistry.php#a12">00162</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeRegistry.php#a12">GetTextureCount</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> texturepool.size(); }
00163 
00171         <a class="code" href="classaeMaterial.php">aeMaterial</a> *<a class="code" href="classaeRegistry.php#a13">FindMaterial</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>);
00172 
00180         <a class="code" href="classaeMaterial.php">aeMaterial</a> *<a class="code" href="classaeRegistry.php#a14">FindMaterialByName</a>(<span class="keyword">const</span> <span class="keywordtype">char</span> *);
00181 
<a name="l00188"></a><a class="code" href="classaeRegistry.php#a15">00188</a>         <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="classaeRegistry.php#a15">GetMaterialCount</a>()<span class="keyword"> const </span>{ <span class="keywordflow">return</span> materialpool.size(); }
00189 
00196         <span class="keywordtype">void</span> <a class="code" href="classaeRegistry.php#a16">PushObjectToPool</a>(<a class="code" href="classaeObject.php">aeObject</a> *);
00197 
00204         <span class="keywordtype">void</span> <a class="code" href="classaeRegistry.php#a17">PushTextureToPool</a>(<a class="code" href="classaeTexture.php">aeTexture</a> *);
00205 
00212         <span class="keywordtype">void</span> <a class="code" href="classaeRegistry.php#a18">PushMaterialToPool</a>(<a class="code" href="classaeMaterial.php">aeMaterial</a> *);
00213 
00222         <a class="code" href="classaePlugin.php">aePlugin</a> *<a class="code" href="classaeRegistry.php#a19">LoadPlugin</a>(aePluginID);
00223 };
00224 
00225 <span class="preprocessor">#endif // __AELIB_AEREG_REGISTRY_H__</span>
</pre></div><hr><address style="align: right;"><small>Generated on Sun Mar 2 01:14:22 2003 for AE Engine by
<a href="http://www.doxygen.org/index.html">
<img src="doxygen.png" alt="doxygen" align="middle" border=0 
width=110 height=53></a>1.3-rc2 </small></address>
</body>
</html>
