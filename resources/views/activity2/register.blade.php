@extends('templates/mainTemplate')

@section('pagetitle','Registration')

@section('pageheader', 'Registration')

@section('body')

<form method="get" action="registersummary">
	<table cellspacing="2" border="0">
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="fname"></td>
	</tr>
	<tr>
		<td>Middle Name:</td> 
		<td><input type="text" name="mname"></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lname"></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td>
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		</td>
	<tr>
		<td>Civil Status:</td>
		<td>
			<select name="cstat">
				<option value="married" selected>Married</option>
				<option value="single">Single</option>
			</select>
		</td>
	<tr>
		<td>Birthdate:</td>
		<td><input type="datetime" name="bdate"></td>
	</tr>
	<tr>
		<td>Department:</td>
		<td>
			<select name="dept">
				<option value="MIS" selected>MIS</option>
				<option value="Administration">Administration</option>
				<option value="Nursing">Nursing</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Position:</td>
		<td>
			<select name="pos">
				<option value="Contractual" selected>Contractual</option>
				<option value="Permanent">Permanent</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_submit" value="Submit"><br /></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
</form>
@stop